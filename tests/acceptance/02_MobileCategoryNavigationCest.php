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

    function T1024MobileCategoryNavigation(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop10();
        $I->amountTopCategories10();
    }

    function T1025CategoryNavigationSaleDepartment(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop25();
        $I->amountTopCategories25();
    }



    
    
    



    

}

