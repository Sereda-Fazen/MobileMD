<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1018MobileSellMower(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSellMower();
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }
    
}

