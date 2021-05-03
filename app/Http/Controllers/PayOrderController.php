<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use App\Order\Order;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    //
    public function pay(PaymentGatewayContract $paymentGateway, Order $order){
        $order->all(200);
        dd($paymentGateway->charge(500));
    }
}
