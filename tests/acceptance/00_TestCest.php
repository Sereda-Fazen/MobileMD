<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1017MobileTractorSale(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->mobileSellTractor();
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }
    
}

