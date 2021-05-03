<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\UploadService;
use App\UploadServiceFacade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(PaymentGatewayContract::class, function($app){
            if(request()->credit){
                return new CreditPaymentGateway('vnd');
            }
//            return new BankPaymentGateway('usd');
            return new BankPaymentGateway('vnd');
        });
        $this->app->singleton('upload', function (){
            return new UploadService('test', 'txt');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
