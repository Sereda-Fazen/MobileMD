<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 31.05.16
 * Time: 13:24
 */

namespace Page;


class MyAccountMowDirect
{
    public static $URL = '/customer/account/index/';
    public static $accountInformation = '//*[@class="main"]/div[2]/div/div[2]/ul/li[2]';
    public static $assertAccountPage = '//*[@class="page-title"]/h1';
    public static $titleField = '//*[@id="prefix"]';
    public static $firstNameField = '//*[@id="firstname"]';
    public static $lastNameField = '//*[@id="lastname"]';
    public static $telephoneField = './/*[@id="telephone"]';
    public static $emailAddressField = './/*[@id="email"]';
    public static $saveButton = '//*[@id="form-validate"]/div[3]/button';
    public static $assertSaveOk = '//*[@class="success-msg"]//span';

    public static $URL2 = '/customer/address/';
    public static $addressBook = '//*[@class="main"]/div[2]/div/div[2]/ul/li[3]';
    public static $assertAddressPage = '//*[@class="page-title title-buttons"]/h1';
    public static $defaultAddressEdit = '//ol/li[1]/p/a';
    public static $changeShipAddress = '//ol/li[2]/p/a';
    public static $AddNewAddressButton = '//*[@class="page-title title-buttons"]/button';
    public static $countyCanada = '//*[@id="country"]/option[41]';
    public static $countryFrance = '//*[@id="country"]/option[76]';
    public static $countryGermany = '//*[@id="country"]/option[83]';
    public static $streetAddress = '//*[@id="street_1"]';
    public static $townCity = '//*[@id="city"]';
    public static $regionManitobe = '//*[@id="region_id"]/option[4]';
    public static $regionHautes = './/*[@id="region_id"]/option[22]';
    public static $regionBayern = '//*[@id="region_id"]/option[4]';
    public static $postcodeField = '//*[@id="zip"]';
    public static $saveDefaultAddressButton ='//*[@class="buttons-set"]/button';
    public static $assertEditAddress = '//*[@class="page-title"]/h1';
    public static $defaultBillingAddressCheckbox = '//*[@id="primary_billing"]';
    public static $defaultShippingAddressCheckbox = '//*[@id="primary_shipping"]';
    public static $deleteAddress = '//*[@class="col-2 addresses-additional"]//li[1]/p/a[2]';


    public static $myOrders = '//*[@class="main"]/div[2]/div/div[2]/ul/li[4]';
    public static $myWishList = '//*[@class="main"]/div[2]/div/div[2]/ul/li[5]';

    public static $newsletterSubscription = '//*[@class="main"]/div[2]/div/div[2]/ul/li[8]';
    public static $assertNewsletterPage = '//*[@class="col-main std"]/h2';
    public static $newsletterCheckbox = './/*[@id="list-b33a1ab066"]';
    public static $newsletterSaveButton = './/*[@id="mailchimp-additional"]/div[2]/button';


    protected $tester;

    public function __construct(\AcceptanceTester $I)

    {
        $this->tester = $I; // подкл. конструктора
    }

    public function accountInformationMowDirect($title, $firstName, $lastName)
    {
        $I= $this ->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$accountInformation);
        $I->waitForElement(self::$assertAccountPage);
        $I->see('Edit Account Information',self::$assertAccountPage);
        $I->fillField(self::$titleField,$title);
        $I->fillField(self::$firstNameField,$firstName);
        $I->fillField(self::$lastNameField,$lastName);
        $I->click(self::$saveButton);
        $I->waitForElement(self::$assertSaveOk);
        $I->see('The account information has been saved.',self::$assertSaveOk);
        return $this;
        }

    public function addDefaultBillingAddress($firstName, $lastName,$telephone,$street,$city,$postcode)
    {
        $I= $this ->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$addressBook);
        $I->waitForElement(self::$assertAddressPage);
        $I->see('Address Book',self::$assertAddressPage);
        $I->click(self::$defaultAddressEdit);
        $I->fillField(self::$firstNameField,$firstName);
        $I->fillField(self::$lastNameField,$lastName);
        $I->fillField(self::$telephoneField,$telephone);
        $I->click(self::$countyCanada);
        $I->fillField(self::$streetAddress,$street);
        $I->fillField(self::$townCity,$city);
        $I->click(self::$regionManitobe);
        $I->fillField(self::$postcodeField,$postcode);
        $I->click(self::$saveDefaultAddressButton);
        $I->waitForElement(self::$assertSaveOk);
        $I->see("The address has been saved.", self::$assertSaveOk);
        return $this;
    }

    public function changeShippingAddress($firstName,$lastName,$telephone,$street,$city,$postcode)
    {
        $I= $this ->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$addressBook);
        $I->waitForElement(self::$assertAddressPage);
        $I->click(self::$changeShipAddress);
        $I->fillField(self::$firstNameField,$firstName);
        $I->fillField(self::$lastNameField,$lastName);
        $I->fillField(self::$telephoneField,$telephone);
        $I->click(self::$countryFrance);
        $I->fillField(self::$streetAddress,$street);
        $I->fillField(self::$townCity,$city);
        $I->click(self::$regionHautes);
        $I->fillField(self::$postcodeField,$postcode);
        $I->click(self::$saveDefaultAddressButton);
        $I->waitForElement(self::$assertSaveOk);
        $I->see("The address has been saved.", self::$assertSaveOk);
        return $this;
    }


    public function addNewAddress($firstName,$lastName,$telephone,$street,$city,$postcode)
    {
        $I= $this ->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$addressBook);
        $I->waitForElement(self::$assertAddressPage);
        $I->click(self::$AddNewAddressButton);
        $I->fillField(self::$firstNameField,$firstName);
        $I->fillField(self::$lastNameField,$lastName);
        $I->fillField(self::$telephoneField,$telephone);
        $I->click(self::$countryGermany);
        $I->fillField(self::$streetAddress,$street);
        $I->fillField(self::$townCity,$city);
        $I->click(self::$regionBayern);
        $I->fillField(self::$postcodeField,$postcode);
        $I->click(self::$defaultBillingAddressCheckbox);
        $I->click(self::$defaultShippingAddressCheckbox);
        $I->click(self::$saveButton);
        $I->waitForElement(self::$assertSaveOk);
        $I->see("The address has been saved.", self::$assertSaveOk);
        $I->click(self::$deleteAddress);
        $I->acceptPopup();
        return $this;
    }

    public function newsletterCheck (){
        $I= $this ->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$newsletterSubscription);
        $I->waitForElement(self::$assertNewsletterPage);
        $I->click(self::$newsletterCheckbox);
        $I->click(self::$newsletterSaveButton);



    }



}