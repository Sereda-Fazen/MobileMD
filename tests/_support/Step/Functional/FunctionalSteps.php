<?php
namespace Step\Functional;


class FunctionalSteps extends \FunctionalTester
{

    public function enterDataLogin ($login, $pass)
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('Sign in', '.fright');
        $I->fillField('//*[@name="login[username]"]', $login);
        $I->fillField('//*[@name="login[password]"]', $pass);
        $I->click('send');

    }

    public function functionalSearch($invalid){
        $I = $this;
        $I->amOnPage('/');
        $I->fillField('//*[@name="q"]', $invalid);
        $I->click('//*[@class="button search-button"]');
        $I->seeCurrentUrlEquals('/searchresults?q='.$invalid.'');

    }

    public function checkInvalidUrl(){
        $I = $this;
        $I->amOnPage('/test/test/test.html');
        $I->see('We are sorry, but the page you are looking for cannot be found.', '//div[@class="page-head-alt"]');
        $I->seeCurrentUrlEquals('/test/test/test.html');
    }

    /**
     * @param $login
     * @param $pass
     * My Account
     */

    public function accountInfo($login, $pass){
        $I = $this;
        self::enterDataLogin($login, $pass);
        $I->seeCurrentUrlEquals('/customer/account/');
        $I->amOnPage('/customer/account/edit/');
        $I->see('Edit Account Information', '//div[@class="page-title"]');
    }

    public function editInfo($title){
        $I = $this;
        $I->fillField('//*[@name="prefix"]', $title);
        $I->fillField('//*[@name="firstname"]', 'fazen');
        $I->fillField('//*[@name="lastname"]', 'alex');
        $I->fillField('//*[@name="email"]', 'test_mowdirect@yahoo.co.uk');
        $I->seeElement('//*[@name="change_password"]');
        $I->click('//*[@name="change_password"]');
        $I->fillField('//*[@name="current_password"]', '123456');
        $I->fillField('//*[@name="password"]', '123456');
        $I->fillField('//*[@name="confirmation"]', '123456');
        $I->click('//*[@class="buttons-set"]//button');
        $I->seeCurrentUrlEquals('/customer/account/');
        $I->see('The account information has been saved.', '//*[@class="success-msg"]');
        $I->see($title,'//*[@class="box"]//p');
    }

    public function accountAddress($login, $pass){
        $I = $this;
        self::enterDataLogin($login, $pass);
        $I->seeCurrentUrlEquals('/customer/account/');
        $I->amOnPage('/customer/address/');
        $I->seeCurrentUrlEquals('/customer/address/');
        $I->see('Address Book', '//div[@class="page-title title-buttons"]/h1');
    }
    public function addAddress($name, $lastName){
        $I = $this;
        $I->amOnPage('/customer/address/new/');
        $I->seeCurrentUrlEquals('/customer/address/new/');
        $I->see('Add New Address', '//div[@class="page-title"]');
        $I->fillField('//*[@name="firstname"]', $name);
        $I->fillField('//*[@name="lastname"]', $lastName);
        $I->fillField('//*[@name="telephone"]', '334667568234');
        $I->selectOption('//select[@name="country_id"]', 'United Kingdom');
        $I->fillField('//*[@name="postcode"]', '61206');
        $I->fillField('//*[@name="street[]"]', 'street, Test 1');
        $I->fillField('//*[@name="city"]', '435345');

        $I->seeElement('//li[@class="control"]/input[contains(@title,"Billing")]');
        $I->seeElement('//li[@class="control"]/input[contains(@title,"Shipping")]');
        $I->click('//li[@class="control"]/input[contains(@title,"Billing")]');
        $I->click('//li[@class="control"]/input[contains(@title,"Shipping")]');
        $I->click('//*[@class="buttons-set"]//button');
        $I->seeInCurrentUrl('/customer/address/index/');
        $I->see($name,'//*[@class="col-2 addresses-additional"]//address');
        $I->see($lastName,'//*[@class="col-2 addresses-additional"]//address');
    }







    





}