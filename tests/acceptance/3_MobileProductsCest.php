<?php

use \Step\Acceptance;


/**
 * @group mobileProducts
 */
class MobileProductsCest
{

    /**
     * @param Acceptance\ProductsSteps $I
     * @param \Page\Search $search
     * T917_View a standard Product Layout
     */

    function standardProductLayout(Step\Acceptance\ProductsSteps $I, \Page\Search $search) {
        $I->productsLayout();

    }

    /**
     * @param Acceptance\ProductsSteps $I
     * @param \Page\Search $search
    T_934_View a Product layout with custom options
     */

    function mobileLayoutCustomOptions(\Step\Acceptance\ProductsSteps $I, \Page\Search $search){
        $search->search();
        $search->searchWrong('optional accessories');
        $I->mobileProductsLayoutCustomOptions();
    }

    /**

     * @param Acceptance\ProductsSteps $I
     * @param \Page\Search $search
     * T935_View a Product Layout with a Banner advert
     */

    function mobileLayoutBannerAdvert(\Step\Acceptance\ProductsSteps $I, \Page\Search $search){
        $search->search();
        $search->searchWrong('Exclusive rear-roller');
        $I->mobileLayoutBannerAdvert();
    }



    
    
    



    

}

