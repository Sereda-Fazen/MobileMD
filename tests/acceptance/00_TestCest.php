<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
    }

  
    function addItemsInWishlist(Page\MyWishList $myWishList) {
        $myWishList->addItemsInWishlist();
    }


}

