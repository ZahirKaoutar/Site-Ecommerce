<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Mail\OrderPlaced;
use App\Models\Order;
use App\Models\Adress;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

#[Title('Chekout')]

class CheckoutPage extends Component
{
    public $first_name;
    public $last_name;
    public $phone;
    public $street_adress;
    public $city;
    public $state;
    public $zip_code;
    public $payement_method;
    public function placeOrder(){


        $this->validate([

            'first_name' =>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'street_adress'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip_code'=>'required',
            'payement_method'=>'required'

        ]);
        $cart_items=CartManagement::getCartItemsFromCookie();

        $line_items= [];
        foreach($cart_items as $item){
            $line_items[]=[
                'price_data'=>[
                    'currency_data'=>'MAD',
                    'unit_amount'=>$item['unit_amount']*100,
                    'product_data'=>[
                        'name'=>$item['name'],
                    ]
                    ],
                    'quantity'=>$item['quantity'],

            ];
        }
        //creation  de nouvel order
        
        $order= new Order();
        $order->user_id =auth()->user()->id;
        $order->grand_totale=CartManagement::calculateGrandTotal($cart_items);
        $order->payement_method=$this->payement_method;
        $order->payement_status='pending';
        $order->status='new';
        $order->currency='mad';
        $order->shipping_amount=0;
        $order->shipping_method='none';
        $order->notes='Order placed by'. auth()->user()->name;
//creation  denouvel adress
        $adress= new Adress();
        $adress->first_name =$this->first_name;
        $adress->last_name =$this->last_name;
        $adress->phone=$this->phone;
        $adress->street_adress =$this->street_adress;
        $adress->city=$this->city;
        $adress->state=$this->state;
        $adress->zip_code=$this->zip_code;
        $redirect_url='';
        if($this->payement_method =='stripe'){
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $sessionCheckout= Session::create([
                'payement_method_type'=>['card'],
                'line_items'=>$line_items,
                'customer_email' =>auth()->user()->email,
                'mode'=>'payement',
                'success_url'=>route('success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url'=>route('cancel'),

            ]);
            $redirect_url=$sessionCheckout->url;
        }
        else{
            $redirect_url=route('success');

        }
        $order->save();
        $adress->order_id=$order->id;
        $adress->save();
        $order->items()->createMany($cart_items);
        CartManagement::clearCartItems();
        Mail::to(request()->user())->send(new OrderPlaced($order));
        return redirect($redirect_url);






    }
    public function render()
    {
        $cart_items=CartManagement::getCartItemsFromCookie();
        $grand_total=CartManagement::calculateGrandTotal($cart_items);
        return view('livewire.checkout-page',[
            'cart_items'=>$cart_items,
            'grand_total'=>$grand_total,
        ]);
    }
}
