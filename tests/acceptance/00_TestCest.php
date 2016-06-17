<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{




    /**
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $checkoutPage
     */

    function purchaseTractorOptional(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage)
    {
        $I->optional();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }





}

