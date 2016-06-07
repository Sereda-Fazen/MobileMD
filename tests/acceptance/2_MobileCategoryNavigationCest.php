<?php

use \Step\Acceptance;


/**
 * @group mobileCategoryNavigation
 */
class MobileCategoryNavigationCest
{

    function mobileCategoryNavigation(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop10();
        $I->amountTopCategories();
    }



    
    
    



    

}

