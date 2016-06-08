<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{



    function mobileLayoutBannerAdvert(\Step\Acceptance\ProductsSteps $I, \Page\Search $search){
        $search->search();
        $search->searchWrong('Exclusive rear-roller');
        $I->mobileLayoutBannerAdvert();
    }

   




}

