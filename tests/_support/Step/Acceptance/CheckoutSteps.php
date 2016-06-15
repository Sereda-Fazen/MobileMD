<?php
namespace Step\Acceptance;
class CheckoutSteps extends \AcceptanceTester
{

    /**
     * Tractor
     */
    

    public function mobileSellTractor(){
        $I = $this;
        $I->amOnPage('/');
        $I->waitForElement('//div[@class="skip-links"]//a[1]');
        $I->click('//div[@class="skip-links"]//a[1]');
        $I->waitForElement('//*[@id="menu-mobile-2430"]/div[1]/span');
        $I->click('//*[@id="menu-mobile-2430"]/div[1]/span');
        $I->waitForElement('//*[@id="submenu-mobile-2430"]/div[1]');
        $I->click('//*[@id="submenu-mobile-2430"]/div[1]');
        $I->waitForElement('//*[@class="m_rom_filter_type_filter md-image-filter"]//li/a');
        $I->click('//*[@class="m_rom_filter_type_filter md-image-filter"]//li/a');
        $I->scrollDown(200);
        $I->waitForElement('//p[@class="action"]/button');
        $I->click('//p[@class="action"]/button');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');

    }

    public function mobilePurchaseOtherItem()
    {
        $I = $this;
        $I->waitForElement('//div[@class="skip-links"]//a[1]');
        $I->click('//div[@class="skip-links"]//a[1]');
        $I->waitForElement('//*[@id="menu-mobile-2334"]/div[1]/span');
        $I->click('//*[@id="menu-mobile-2334"]/div[1]/span');
        $I->waitForElement('//*[@id="menu-mobile-2381"]/div[1]/span');
        $I->click('//*[@id="menu-mobile-2381"]/div[1]/span');
        $I->waitForElement('//*[@id="menu-mobile-2382"]/div/a/span');
        $I->click('//*[@id="menu-mobile-2382"]/div/a/span');
        $I->scrollDown(200);
        $I->waitForElement('//p[@class="action"]/button');
        $I->click('//p[@class="action"]/button');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');
        $I->waitForElement('//*[@id="shopping-cart-table"]/tbody/tr[2]');

    }


    /**
     * Mower
     */

    public function mobileSellMower(){
        $I = $this;
        $I->waitForElement('//div[@class="skip-links"]//a[1]');
        $I->click('//div[@class="skip-links"]//a[1]');
        $I->waitForElement('//*[@id="menu-mobile-1893"]/div[1]/span');
        $I->click('//*[@id="menu-mobile-1893"]/div[1]/span');
        $I->waitForElement('//*[@id="menu-mobile-1934"]/div[1]/span');
        $I->click('//*[@id="menu-mobile-1934"]/div[1]/span');
        $I->waitForElement('//*[@id="menu-mobile-1935"]/div/a/span');
        $I->click('//*[@id="menu-mobile-1935"]/div/a/span');
        $I->waitForElement('//p[@class="action"]/button');
        $I->click('//p[@class="action"]/button');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');

    }

    /**
     * Brand
     * @param $flymoGrass
     * @param $flymoVacs
     * @param $qty
     */

    public function mobileSelectBrand($flymoGrass, $flymoVacs, $qty)
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('//div[@class="skip-links"]//a[2]');
        $I->waitForElement('//div[@id="header-search"]//div/input');
        $I->fillField('//div[@id="header-search"]//div/input', $flymoGrass);
        $I->click('//div[@id="header-search"]//button');
        $I->scrollDown(200);
        $I->waitForElement('//*[@class="gsc-expansionArea"]/div[2]/div/div');

        $I->click('//*[@class="gsc-expansionArea"]/div[1]/div/div');
        $I->waitForElement('//div[@class="add-to-cart-buttons"]/button');
        $I->click('//div[@class="add-to-cart-buttons"]/button');
       
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');



        $I->click('//div[@class="skip-links"]//a[2]');
        $I->waitForElement('//div[@id="header-search"]//div/input');
        $I->fillField('//div[@id="header-search"]//div/input', $flymoVacs);
        $I->click('//div[@id="header-search"]//button');
        $I->scrollDown(200);
        $I->waitForElement('//*[@class="gs-webResult gs-result"]/div');
        $I->click('//*[@class="gs-webResult gs-result"]/div');
        $I->waitForElement('//p[@class="action"]//button');
        $I->click('//p[@class="action"]//button');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');

        $I->waitForElement('//div[@id="cart_mobile"]//tbody//tr[2]');
        $I->waitForElement('//div[@id="cart_mobile"]//tbody//tr[2]//input');
        $I->click('//div[@id="cart_mobile"]//tbody//tr[2]//input');
        $I->waitForElementVisible('//div[@id="cart_mobile"]//tbody//tr[2]//button');
        $I->fillField('//div[@id="cart_mobile"]//tbody//tr[2]//input', $qty);
        $I->click('//div[@id="cart_mobile"]//tbody//tr[2]//button');
        $I->getVisibleText($qty, '//div[@id="cart_mobile"]//tbody//tr[2]//input');


    }




    public function mobileSelectBrands()
    {
        $I = $this;

        $I->amOnPage('/');
        $I->click('//div[@class="skip-links"]//a[2]');
        $I->waitForElement('//div[@id="header-search"]//div/input');
        $I->fillField('//div[@id="header-search"]//div/input', 'Westwood F Series 4TRAC Garden Tractors');
        $I->click('//div[@id="header-search"]//button');
        $I->scrollDown(200);
        $I->waitForElement('//*[@class="gsc-expansionArea"]/div[1]/div/div');
        $I->click('//*[@class="gsc-webResult gsc-result"]/div/div');
        $I->scrollDown(200);
        $I->wait(2);
        $I->waitForElement('//p[@class="action"]//button');
        $I->click('//p[@class="action"]//button');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');


        $I->click('//div[@class="skip-links"]//a[2]');
        $I->waitForElement('//div[@id="header-search"]//div/input');
        $I->fillField('//div[@id="header-search"]//div/input', 'Viking Garden Shredders');
        $I->click('//div[@id="header-search"]//button');
        $I->scrollDown(200);
        $I->waitForElement('//*[@class="gs-webResult gs-result"]/div');
        $I->click('//*[@class="gs-webResult gs-result"]/div');
        $I->waitForElement('//p[@class="action"]//button');
        $I->click('//p[@class="action"]//button');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');




        $I->waitForElement('//div[@id="cart_mobile"]//tbody//tr[2]');
        $I->waitForElement('//div[@id="cart_mobile"]//tbody//tr[2]//input');
        $I->click('//div[@id="cart_mobile"]//tbody//tr[2]//input');
        $I->waitForElementVisible('//div[@id="cart_mobile"]//tbody//tr[2]//button');
        $I->fillField('//div[@id="cart_mobile"]//tbody//tr[2]//input', '3');
        $I->click('//div[@id="cart_mobile"]//tbody//tr[2]//button');
        $I->getVisibleText('3', '//div[@id="cart_mobile"]//tbody//tr[2]//input');


    }





}