<?php

use \Step\Acceptance;


/**
 * @group mobileCheckout
 */
class MobileCheckoutCest
{

    /**
     * @param Acceptance\LoginSteps $I
     * T918_Tractor Sale
     */

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
    }

    function mobileSellTractor(\Step\Acceptance\CheckoutSteps $I){
        $I->mobileSellTractor();
    }

    function checkOrderTractor(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T919_Mower Sale
     */

    function mobileSellMower(\Step\Acceptance\CheckoutSteps $I){
        $I->mobileSellMower();
    }

    function checkOrderMower(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T920_Purchase Tractor with other product
     */


    function addToBasketTractorForOther(\Step\Acceptance\CheckoutSteps $I){
        $I->mobileSellTractor();
    }
    function mobileSellTractorWithOtherItems(\Step\Acceptance\CheckoutSteps $I){
        $I->mobileSellTractor();
    }

    function mobilePurchaseOtherItem(\Step\Acceptance\CheckoutSteps $I){
        $I->mobilePurchaseOtherItem();
    }

    function checkOrderTractorOther(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T922_Purchase Multiple Different Products Same supplie
     */


    function mobileSelectBrandFlymo(\Step\Acceptance\CheckoutSteps $I){
        $I->mobileSelectBrand('Flymo grass trimmer','Flymo Vacs & Blowers','2');
    }

    function checkOrderMultipleTractor(\Page\Checkout $checkoutPage)
    {
        $checkoutPage->checkOrder();
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * T923_Purchase Multiple Number of Products
     */




    function mobileSelectBrands(\Step\Acceptance\CheckoutSteps $I){
        $I->mobileSelectBrands();
    }

    function checkOrderMultipleProducts(\Page\Checkout $checkoutPage)
    {
        $checkoutPage->checkOrder();
    }
    

    
    
    



    

}

