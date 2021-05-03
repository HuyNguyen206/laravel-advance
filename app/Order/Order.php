<?php


namespace App\Order;


use App\Billing\PaymentGatewayContract;

class Order
{

    /**
     * @var BankPaymentGateway
     */
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all($amount){
        $this->paymentGateway->setDiscount($amount);
    }
}
