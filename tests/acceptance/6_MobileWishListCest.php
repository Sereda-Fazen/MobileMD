<?php
use \Step\Acceptance;

/**
 * @group mobileWishlist
 */
class MobileWishListCest
{

    function mobileWishlist(Step\Acceptance\LoginSteps $I, \Page\MyWishList $myWishList)
    {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $myWishList->wishList();
        $myWishList->checkItems();
        $myWishList->addComment();
        $myWishList->addShare();

    }

    function mobileAddItemsFromWishlist(Step\Acceptance\LoginSteps $I, \Page\MyWishList $myWishList) {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $myWishList->addItemsInWishlist();
    }




    





}

