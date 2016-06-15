<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{



    function mobilePurchaseMultipleNumberProducts(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSelectBrands();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }






}

