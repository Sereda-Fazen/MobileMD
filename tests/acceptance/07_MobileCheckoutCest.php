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

    function mobileTractorSale(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->mobileSellTractor();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T919_Mower Sale
     * @param \Page\Checkout $checkoutPage
     */

    function mobileSellMower(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSellMower();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T920_Purchase Tractor with other product
     * @param \Page\Checkout $checkoutPage
     */


    function mobilePurchaseTractorWithOtherProduct(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSellTractor();
        $I->mobilePurchaseOtherItem();
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T922_Purchase Multiple Different Products Same supplie
     * @param \Page\Checkout $checkoutPage
     */


    function mobilePurchaseMultipleDifferentProductsSameSupplie(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $I->mobileSelectBrand('2');
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }

   
    
    /**
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $checkoutPage
     */
    function mobilePurchaseMultipleNumberProducts(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->mobileSelectBrands('3');
        $checkoutPage->checkOrder('mowdirect@gmail.com','123456');
    }


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


