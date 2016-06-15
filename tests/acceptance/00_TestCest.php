<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{



    function T1267PayPalCreditCheckout(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->mobileSellTractor();
        $checkoutPage->checkPayPalCredit('mowdirect@gmail.com','123456');
    }





}

