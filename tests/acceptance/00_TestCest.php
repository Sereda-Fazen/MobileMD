<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{



    function mobilePurchaseMultipleDifferentProductsSameSupplie(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSelectBrand('Flymo grass trimmer','Flymo Vacs & Blowers','2');
       // $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * T923_Purchase Multiple Number of Products
     * @param \Page\Checkout $checkoutPage
     */



    function mobilePurchaseMultipleNumberProducts(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSelectBrands();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }


    /**
     * @param \Page\Search $search
     * T921_Purchase Tractor with custom option
     * @param \Page\Checkout $checkoutPage
     * @internal param Acceptance\LoginSteps $I
     */


    function purchaseTractorOptional(\Page\Search $search, \Page\Checkout $checkoutPage) {
        $search->search();
        $search->searchWrong('Lawnflite accessories optional');
        $search->purchaseTractorOptional();
        //$checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }






}

