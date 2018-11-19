<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\categories;
use App\smallCategories;
use App\Cart_Old;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()-> composer('header',function($view){
            $cate= categories::all();
            $small=smallCategories::all();
            //$small=smallCategories::where('id_category',$cate->id)->get();\
            $view->with('cate',$cate)
            ->with('small',$small);
        });

        view()-> composer(['header','page.cart','page.customerInformation','page.shippingMethod','page.paymentMethod'],function($view){
           if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart_Old($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
