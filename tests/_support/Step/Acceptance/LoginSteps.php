<?php
namespace Step\Acceptance;

use Exception;
use \Codeception\Util\Locator;

class LoginSteps extends \AcceptanceTester
{

    public function checkExistUser()
    {
        $I = $this;
        $grabMsg = $I->grabTextFrom('//ul[@class="messages"]');
        if (preg_match('/Thank you for registering with Denimio./i', $grabMsg) == 1) {
            $I->see('Thank you for registering with Denimio.', '//ul[@class="messages"]');
        } else {
            $I->see('There is already an account with this email address. ', '//ul[@class="messages"]');
        }
    }

    public function login()
        {
            $I = $this;
            $I->amOnPage('/');
            $I->click('//a[@class="login_click"]');
            $I->waitForElement('#email');
            $I->fillField('#email', 'denimio_test@yahoo.com');
            $I->fillField('#pass', '123456');
            $I->click('Login');
            $I->see('From your My Account Dashboard','div.welcome-msg > p:nth-of-type(2)');
        }



        public function waitAlertWindow ()
        {
            $I = $this;
            $count = count($I->grabMultiple('//*[@class="col-2 addresses-additional"]/ol/li'));
            for ($d = $count; $d > 0; $d--) {
                $this->scrollDown(1000);
                $I->click('ol > li:nth-of-type(' . $d . ') > p > a.link-remove');
                $I->acceptPopup();
                $I->waitForElement('li.success-msg');
            }
        }

    public function loginSuccess ($login,$pass)
    {
        $I = $this;

            $I->amOnUrl('http://www.mowdirect.co.uk/');
            $I->waitForElement('//div[@class="skip-links"]/a[3]');
            $I->click('//div[@class="skip-links"]/a[3]');
            $I->waitForElement('//div[@class="links"]//li[6]/a');
            $I->click('//div[@class="links"]//li[6]/a');
            $I->fillField('#email', $login);
            $I->fillField('#pass', $pass);
            $I->click('//div[@class="buttons-set"]//button/span');
            $I->waitForElement('p.hello > strong');
            $I->see('Hello    Test Test1 Test2', 'p.hello > strong');
        
    }





}