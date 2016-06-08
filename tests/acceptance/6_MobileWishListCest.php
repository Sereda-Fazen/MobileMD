<?php
use \Step\Acceptance;

/**
 * @group mobileWishlist
 */
class MobileWishListCest
{

    function mobileAddItemsFromWishlist(Step\Acceptance\LoginSteps $I, \Page\MyWishList $myWishList) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
        $myWishList->addItemsInWishlist();
    }
    function mobileWishlist(Step\Acceptance\LoginSteps $I, \Page\MyWishList $myWishList)
    {
        $myWishList->wishList();
        $myWishList->checkItems();
        $myWishList->removeItemFromWishList();
        $myWishList->addComment();
        $myWishList->addShare();
        $myWishList->removeItem();
    }



    





}

