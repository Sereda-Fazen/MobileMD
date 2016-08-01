<?php

use \Step\Acceptance;


/**
 * @group mobileCheckout
 */
class MobileCheckoutCest
{

    /**
     * @param Acceptance\CheckoutSteps|Acceptance\LoginSteps $I
     * T918_Tractor Sale
     * @param \Page\Checkout $checkoutPage
     */

    function T1017MobileTractorSale(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->mobileSellTractor();
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T919_Mower Sale
     * @param \Page\Checkout $checkoutPage
     */

    function T1018MobileSellMower(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSellMower();
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T920_Purchase Tractor with other product
     * @param \Page\Checkout $checkoutPage
     */


    function T1019MobileTractorOtherProduct(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSellTractor();
        $I->mobilePurchaseOtherItem();
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $checkoutPage
     */

    function T1020MobileTractorOptional(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage)
    {
        $I->optional();
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T922_Purchase Multiple Different Products Same supplie
     * @param \Page\Checkout $checkoutPage
     */




/*
    function T1021MobileProductsSameSupplie(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $I->mobileSelectBrand('2');
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }

   
    
    /**
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $checkoutPage
     */
    function T1022T1023MobilePurchaseProducts(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSelectBrands('3');
        $checkoutPage->mobilePayment('mowdirect@gmail.com','123456');
    }



    
    



    

}


