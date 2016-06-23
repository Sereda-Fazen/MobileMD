<?php
/**
 * @group mobileShoppingCart
 */
class MobileShoppingCartCest
{


    function T1026MobilePaySugePurchase(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkout) {
        $I->mobileSellTractor();
        $checkout->checkSugePurchase('mowdirect@gmail.com','123456');
    }
    
    function T1027MobilePayPalPurchase(Step\Acceptance\CheckoutSteps $I, \Page\ShoppingCart $shoppingCartMowDirect) {
        $I->mobileSellTractor();
        $shoppingCartMowDirect->payPalCheckout();
    }

    function T1266MobilePayPalCredit(Step\Acceptance\CheckoutSteps $I, \Page\ShoppingCart $shoppingCartMowDirect) {
        $I->mobileSellTractor();
        $shoppingCartMowDirect->payPalCredit();
    }
  
    function T1267MobilePayPalCreditCheckout(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage) {
        $I->mobileSellTractor();
        $checkoutPage->checkPayPalCredit('mowdirect@gmail.com','123456');
    }

    






















/*
    function makePurchaseWithRegistration(Step\Acceptance\LoginStepsMowDirect $I, \Page\Checkout $checkout) {
        $I->addItemCheckout();
        $checkout->registerAndBuyOnCheckout('TestTitle','Test','Test2','mowdirect1@gmail.com','123123','Testaddress','Town','222333222','123456');

    }
*/



}