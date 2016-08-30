<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1027MobilePayPalPurchase(Step\Acceptance\CheckoutSteps $I, \Page\ShoppingCart $shoppingCartMowDirect) {
        $I->mobileSellTractor();
        $shoppingCartMowDirect->payPalCheckout();    }
    
}

