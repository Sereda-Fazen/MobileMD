<?php
use \Step\Acceptance;

/**
 * @group mobileWishlist
 */
class MobileWishListCest
{

    function T994T999MobileWishlist(Step\Acceptance\LoginSteps $I, \Page\MyWishList $myWishList)
    {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $myWishList->wishList();
        $myWishList->checkItems();
        $myWishList->addComment();
        $myWishList->addShare();

    }

    function T994MobileAddItemsFromWishlist(Step\Acceptance\LoginSteps $I, \Page\MyWishList $myWishList) {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $myWishList->addItemsInWishlist();
    }




    





}

