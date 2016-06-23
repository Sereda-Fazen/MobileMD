<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1021MobileProductsSameSupplie(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $I->mobileSelectBrand('2');
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }






}

