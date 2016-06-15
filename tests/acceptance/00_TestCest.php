<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{



    function mobileTractorSale(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->mobileSellTractor();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }






}

