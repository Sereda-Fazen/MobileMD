<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1020MobileTractorOptional(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage)
    {
        $I->optional();
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }





}

