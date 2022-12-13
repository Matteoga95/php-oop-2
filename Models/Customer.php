<?php

require_once __DIR__ . "/CreditCard.php";
require_once __DIR__ . "/Utility.php";
require_once __DIR__ . "/product.php";


class Customer
{

    use Utility;

    public $ShopBasket = [];
    public CreditCard $paymentMethod;

    public function __construct(public String $username, public String $email, public String $address)
    {
        $this->username = $username;
        $this->email = $email;
        $this->address = $address;
    }


    public function addProduct(Product $product)
    {
        array_push($this->ShopBasket, $product);
    }

    public function insertCreditCard(CreditCard $card)
    {
        $this->paymentMethod = $card;
        return  $this->paymentMethod;
    }

    public function makePayment($amount)
    {
        //controllo se la carta non è scaduta

        if ($this->paymentMethod->exp_year < date("Y") || $this->paymentMethod->exp_year === date("Y") &&  $this->paymentMethod->exp_month < date("m")) {
            //in questo caso la carta è scaduta
            throw new Exception("The card is expired you can't proceed with the payment!!", 1);
        } else {
            //in questo caso tolgo al balance l'importo del pagamento
            $this->paymentMethod->balance -= $amount;
        }
    }
}