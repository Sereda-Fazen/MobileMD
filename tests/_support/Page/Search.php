<?php
namespace Page;


class Search
{

    public static $URL = '/';
    public static $clickSearchHeader = '//*[@class="skip-links"]/a[2]/span';
    public static $search = '#search';
    public static $search2 = '//div[@class="gsc-input-box"]//input';
    public static $clickSearch = '//button[@class="button search-button"]';
    public static $clickSearch2 = '//td[@class="gsc-search-button"]';
    public static $wait = '//div[@class="std"]';

    // optional


    public static $firstItem = '//div[@class="gsc-webResult gsc-result"]//a';
    public static $optional = '//div[@class="product-options"]';
    public static $input1 = '//dd[@class="last"]//li[1]/input';
    public static $input2 = '//dd[@class="last"]//li[2]/input';
    public static $input3 = '//dd[@class="last"]//li[3]/input';
    public static $input1Show = 'input.checkbox.change-container-classname.validation-passed';
    public static $input2Show = 'ul.options-list > li:nth-of-type(2) > input.checkbox.change-container-classname.validation-passed';
    public static $input3Show = 'ul.options-list > li:nth-of-type(3) > input.checkbox.change-container-classname.validation-passed';
    public static $addToCart = '//div[@class="add-to-cart-buttons"]/button';
    public static $specialProd = '//dl[@class="item-options"]/dt[text()="Exclusive Special Offer"]';
    public static $accessories = '//dl[@class="item-options"]//dd[text()="Free Lawnflite Trailer worth £199!                            "]';
    public static $move = '//*[@class="truncated"]';
    public static $waitAccessories = '//*[@class="truncated_full_value show"]';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



    public function search()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$clickSearchHeader);

    }

    public function searchWrong($search)
    {
        $I = $this->tester;
        $I->fillField(self::$search, $search);
        $I->click(self::$clickSearch);
        $I->waitForElement(self::$wait);
    }

    public function searchInvalid($search)
    {
        $I = $this->tester;
        $I->fillField(self::$search2, $search);
        $I->click(self::$clickSearch2);
        $I->waitForElement(self::$wait);
    }

    // optional

    public function purchaseTractorOptional(){
        $I = $this->tester;
        $I->getVisibleText('Lawnflite');
        $I->waitForElement(self::$firstItem);
        $I->click(self::$firstItem);
        $I->waitForElement(self::$optional);

        $I->click(self::$input1);
        $I->waitForElement(self::$input1Show);

        $I->click(self::$input2);
        $I->waitForElement(self::$input2Show);

        $I->click(self::$input3);
        $I->waitForElement(self::$input3Show);

        $I->click(self::$addToCart);
        $I->waitForElement(self::$specialProd);
        $I->waitForElement(self::$accessories);

    }


}