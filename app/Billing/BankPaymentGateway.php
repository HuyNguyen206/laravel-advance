<?php


namespace App\Billing;


class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {

        $this->currency = $currency;

    }

    public function charge($amount)
    {
        return [
            'currency' => $this->currency,
            'charge' => $amount - $this->discount,
            'discount' => $this->discount,
        ];
    }
    public function setDiscount($amount){
        $this->discount = $amount;
    }
}
