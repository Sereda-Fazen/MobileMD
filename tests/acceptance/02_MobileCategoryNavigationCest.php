<?php

use \Step\Acceptance;


/**
 * @group mobileCategoryNavigation
 */
class MobileCategoryNavigationCest
{

    /**
     * @param \Page\CategoryNavigation $category
     * @param Acceptance\ProductsSteps $I
     * T930_Use category navigation to find the 10 top selling products
     */

    function mobileCategoryNavigation(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop10();
        $I->amountTopCategories10();
    }

    function categoryNavigationSaleDepartment(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop25();
        $I->amountTopCategories25();
    }



    
    
    



    

}

