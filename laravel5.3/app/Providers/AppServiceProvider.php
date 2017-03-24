<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //数据共享
        $user='master';
        view()->share('admin',$user);
        //基于闭包得composers
        view()->composer('*',function($view){
            $nav=array(
                array('name'=>'家电','url'=>'1.html'),
                array('name'=>'冰箱','url'=>'2.html'),
                array('name'=>'洗衣机','url'=>'3.html'),
            );
            $view->with('nav',$nav);
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
