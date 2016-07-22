<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1020MobileTractorOptional(\Step\Acceptance\CheckoutSteps $I)
    {
        $I->amOnPage('/');
        $I->waitForElement('.skip-lis');
        $I->screen();
    }





}

