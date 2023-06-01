<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\Type_product;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('header',function($view){
            $loai_sp=Type_product::all();
            $view->with('loai_sp',$loai_sp);
        });
        // view()->composer('page.loai_sanpham',function($view){
        //     $loai_sp=Type_product::all();
        //     $view->with('loai_sp',$loai_sp);
        // });
        view()->composer('page.product_type',function($view){
            $prouct_new=Type_product::where('new',1)->orderBy('id','DESC')->skip(1)->take(8)->get();
            $view->with('product_new',$prouct_new);
        });
    }
}
