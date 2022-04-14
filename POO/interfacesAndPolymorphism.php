<?php
    interface PaymentGateway{
        public function charge($amount);
    }

    class PurchaseController{
        public function store(PaymentGateway $paymentGateway){
            $paymentGateway->charge(100);
        }
    }

    class Paypal implements PaymentGateway{
        public function charge($amount){
            echo "Chargin {$amount} with Paypal"."<br/>";
        }
    }

    class Stripe implements PaymentGateway{
        public function charge($amount){
            echo "Chargin {$amount} with Stripe";
        }
    }
    
    $controller = new PurchaseController();
    $controller->store(new Paypal());
    $controller->store(new Stripe());



?>