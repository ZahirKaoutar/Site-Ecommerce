<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Contracts\Session\Session;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
#[Title('Success')]

class SuccessPage extends Component
{
    #[Url]
    public $session_id;
    public function render()
    {
        $latest_order = Order::with('adress')->where('user_id',auth()->user()->id)->latest()->first();
       
        return view('livewire.success-page',[
            'order'=>$latest_order,
        ]);
    }
}

