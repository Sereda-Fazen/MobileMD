<?php
namespace Page;


class CategoryNavigation
{

    //Top 10

    public static $URL = 'http://testing:Da1mat1an5@testupgrade.ee12test.mowdirect.co.uk/';
    public static $waitDeals = '//div[@class="skip-links"]//a[1]';
    public static $moveDeals = '//*[@rel="submenu-mobile-3004"]';
    public static $top10 = '//*[@id="submenu-mobile-3004"]/div[5]//span[text()="Top 10 Hedge Trimmer Deals"]';
    public static $category = '//div[@class="category-products"]';
    public static $amount = '//p[@class="amount amount--no-pages"]/strong[text()="10 Item(s)"]';

    // Top 25

    public static $top25 = '//*[@id="submenu-mobile-3004"]/div[2]//span[text()="Top 25 Ride-On Lawnmowers"]';
    public static $click25 = '//div[@class="limiter"]/select';
    public static $select25 = '//div[@class="limiter"]/select/option[5]';
    public static $amount25 = '//p[@class="amount amount--no-pages"]/strong[text()="25 Item(s)"]';





    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



    public function home()
    {
        $I = $this->tester;
        $I->amOnUrl(self::$URL);
        //$I->amOnPage('/');

    }

    public function checkTop10()
    {
        $I = $this->tester;
        $I->waitForElement(self::$waitDeals);
        $I->click(self::$waitDeals);
        $I->waitForElement(self::$moveDeals);
        $I->click(self::$moveDeals);
        $I->waitForElement(self::$top10);
        $I->click(self::$top10);
        $I->waitForElement(self::$category);
        $I->waitForElement(self::$amount);

    }

    public function checkTop25()
    {
        $I = $this->tester;
        $I->waitForElement(self::$waitDeals);
        $I->click(self::$waitDeals);
        $I->waitForElement(self::$moveDeals);
        $I->click(self::$moveDeals);
        $I->waitForElement(self::$top25);
        $I->click(self::$top25);
        $I->waitForElement(self::$category);

        //$I->amOnUrl('http://testupgrade.ee12test.mowdirect.co.uk/sale-begins-now/ride-on-mowers-only/show/25');
        $I->click(self::$click25);
        $I->waitForElement(self::$select25);
        $I->click(self::$select25);

        $I->waitForElement(self::$amount25);

    }






}