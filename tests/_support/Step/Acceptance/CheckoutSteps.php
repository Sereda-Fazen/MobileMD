<?php
namespace Step\Acceptance;
use Exception;

class CheckoutSteps extends \AcceptanceTester
{

    /**
     * Tractor
     */
    

    public function mobileSellTractor(){
        $I = $this;
        $I->amOnPage('/');
        //$I->amOnUrl('http://www.mowdirect.co.uk/');
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
        $I->wait(2);
        $I->click('//p[@class="action"]/button');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');

    }



    public function mobileSelectBrand($qty)
    {
        $I = $this;
        for ($b =1; $b <= 2; $b++) {
        $I->amOnPage('/');

        $I->waitForElement('//*[@class="brands"]');
        $I->waitForElement('//*[@id="brandsViewAll"]');

        $I->scrollTo('//*[@id="brandsViewAll"]', 100);
        $I->click('//*[@id="brandsViewAll"]');
        $brands = count($I->grabMultiple('//*[@id="md-brand-list"]/li'));

            $I->click('//*[@id="md-brand-list"]/li[' . rand(1, $brands) . ']/a');
            $I->waitForElement('//*[@class="mdgo-page-title main-container"]/h1');
            $I->click('//div[@class="category-collateral"]/div');

            $I->scrollDown(200);
            try {
                $I->waitForElement('//div[@class="add-to-cart-buttons"]/button');
                $I->click('//div[@class="add-to-cart-buttons"]/button');
            } catch (Exception $e) {
                $I->waitForElement('//p[@class="action"]/button');
                $I->click('//p[@class="action"]/button');
            }

            $I->waitForElement('//li[@class="success-msg"]');
            $I->see('was added to your shopping cart.', '//li[@class="success-msg"]');
        }
        
        try {
            $I->waitForElement('//div[@id="cart_mobile"]//tbody//tr[2]');
            $I->waitForElement('//div[@id="cart_mobile"]//tbody//tr[2]//input');
            $I->click('//div[@id="cart_mobile"]//tbody//tr[2]//input');
            $I->waitForElementVisible('//div[@id="cart_mobile"]//tbody//tr[2]//button');
            $I->fillField('//div[@id="cart_mobile"]//tbody//tr[2]//input', $qty);
            $I->click('//div[@id="cart_mobile"]//tbody//tr[2]//button');
            $I->getVisibleText($qty, '//div[@id="cart_mobile"]//tbody//tr[2]//input');
        } catch (Exception $e) {
            $I->waitForElement('//tr[@class="last even"]');
            $I->fillField('//tr[@class="last even"]/td[4]/input',$qty);
            $I->click('//tr[@class="last even"]/td[4]/button');
            $I->getVisibleText($qty, '//tr[@class="last even"]/td[4]/input');
            
        }


    }




    public function mobileSelectBrands($qty)
    {
        $I = $this;
        for ($f = 1; $f <= 2; $f++) {
        $I->amOnPage('/');

        $I->waitForElement('//*[@class="brands"]');
        $I->waitForElement('//*[@id="brandsViewAll"]');

        $I->scrollTo('//*[@id="brandsViewAll"]', 100);
        $I->click('//*[@id="brandsViewAll"]');

            $I->scrollTo('//*[@id="md-mobile-social-links"]');
            $I->waitForElement('//*[@id="md-brand-list"]//img');
            $I->click('//*[@id="md-brand-list"]//img');

            $I->waitForElement('//*[@class="mdgo-page-title main-container"]/h1');
            $I->click('//div[@class="category-collateral"]/div['.$f.']');

            $I->scrollDown(200);
            try {
                $I->waitForElement('//div[@class="add-to-cart-buttons"]/button');
                $I->click('//div[@class="add-to-cart-buttons"]/button');
            } catch (Exception $e) {
                $I->waitForElement('//p[@class="action"]/button');
                $I->click('//p[@class="action"]/button');
            }

            $I->waitForElement('//li[@class="success-msg"]');
            $I->see('was added to your shopping cart.', '//li[@class="success-msg"]');
        }

        try {
            $I->waitForElement('//div[@id="cart_mobile"]//tbody//tr[2]');
            $I->waitForElement('//div[@id="cart_mobile"]//tbody//tr[2]//input');
            $I->click('//div[@id="cart_mobile"]//tbody//tr[2]//input');
            $I->waitForElementVisible('//div[@id="cart_mobile"]//tbody//tr[2]//button');
            $I->fillField('//div[@id="cart_mobile"]//tbody//tr[2]//input', $qty);
            $I->click('//div[@id="cart_mobile"]//tbody//tr[2]//button');
            $I->getVisibleText($qty, '//div[@id="cart_mobile"]//tbody//tr[2]//input');
        } catch (Exception $e) {

            $I->waitForElement('//tr[@class="last even"]');
            $I->fillField('//tr[@class="last even"]/td[4]/input',$qty);
            $I->click('//tr[@class="last even"]/td[4]/button');
            $I->getVisibleText($qty, '//tr[@class="last even"]/td[4]/input');

        }

    }
    

    public function optional(){
        $I = $this;
        $I->amOnPage('/');
        $I->waitForElement('//div[@class="skip-links"]//a[1]');
        $I->click('//div[@class="skip-links"]//a[1]');
        $I->waitForElement('//*[@id="menu-mobile-2430"]/div[1]/span');
        $I->click('//*[@id="menu-mobile-2430"]/div[1]/span');
        $I->waitForElement('//*[@id="submenu-mobile-2430"]/div[6]');
        $I->click('//*[@id="submenu-mobile-2430"]/div[6]');
        $I->waitForElement('//*[@class="products-list"]//img');
        $I->click('//*[@class="products-list"]//img');
        $I->waitForElement('//*[@class="product-options"]//ul');
        $optional = count($I->grabMultiple('//*[@class="product-options"]//ul/li'));
        for ($o =1; $o <= $optional; $o++){
            $I->click('//*[@class="product-options"]//ul/li['.$o.']/input');
            $I->waitForElement('//*[@class="checkbox  product-custom-option2523 change-container-classname validation-passed"]');
        }


        try {
            $I->waitForElement('//div[@class="add-to-cart-buttons"]/button');
            $I->click('//div[@class="add-to-cart-buttons"]/button');
        } catch (Exception $e) {
            $I->waitForElement('//p[@class="action"]/button');
            $I->click('//p[@class="action"]/button');
        }
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');
    }



}