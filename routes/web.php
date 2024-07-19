<?php

use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use Filament\Notifications\Auth\ResetPassword;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',HomePage::class);
Route::get('/categories' ,CategoriesPage ::class);
Route::get('/products' ,ProductsPage::class);
Route::get('/products/{slug}' ,ProductDetailPage::class)->name('product.show');
Route::get('/cart' ,CartPage::class);



// Ce groupe de routes est accessible uniquement aux utilisateurs qui ne sont pas authentifiés (c'est-à-dire aux "invités").
Route::middleware('guest')->group(function(){
    Route::get('/login' ,LoginPage::class)->name('login');
    Route::get('/register' ,RegisterPage::class);
    Route::get('/reset/{token}' ,ResetPasswordPage::class)->name('password.reset');
    Route::get('/forgot' ,ForgotPasswordPage::class)->name('password.request');
});

//  pour les user autentifier
Route::middleware('auth')->group(function(){
    Route::get('/logout',function(){
        auth()->logout();
        return redirect('/');
    });
Route::get('/checkout' ,CheckoutPage::class);
Route::get('/my-orders' ,MyOrdersPage::class)->name('my-orders');
Route::get('/my-orders/{order_id}' ,MyOrderDetailPage::class)->name('my-orders.show');
Route::get('/success' ,SuccessPage::class)->name('success');
Route::get('/cancel' ,CancelPage::class)->name('cancel');


});
