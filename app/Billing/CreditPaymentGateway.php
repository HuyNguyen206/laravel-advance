<?php


namespace App\Billing;


class CreditPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {

        $this->currency = $currency;
        $this->discount = 0;
    }

    public function charge($amount)
    {
        $fee = ($amount/100)*3;
        return [
            'currency' => $this->currency,
            'charge' => $amount - $this->discount + $fee,
            'discount' => $this->discount,
            'fee' => $fee
        ];
    }
    public function setDiscount($amount){
        $this->discount = $amount;
    }
}
