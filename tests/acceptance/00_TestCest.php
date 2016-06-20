<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{





    function mobilePurchaseMultipleDifferentProductsSameSupplie(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $I->mobileSelectBrand('2');
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }






}

