<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function loginSuccess(AcceptanceTester $I, \Page\Login $loginPage) {
        $loginPage->loginAccount();
        $loginPage->loginInvalid('mowdirect@gmail.com', '123456');
        $I->see('From your My Account Dashboard you have the ability to view','div.welcome-msg');
        $loginPage->logout();
    }
    
}

