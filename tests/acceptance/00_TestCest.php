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

    function mobileCheckEmptyWishList(Page\MyWishList $myWishList) {
        $myWishList->wishList();
    }

    function checkAnyItems(Page\MyWishList $myWishList) {
        $myWishList->checkItems();
    }

    function removeItemFromWishList(Page\MyWishList $myWishList) {
        $myWishList->removeItemFromWishList();
    }
    function addComment(Page\MyWishList $myWishList) {
        $myWishList->addComment();
    }
    function addShare(Page\MyWishList $myWishList) {
        $myWishList->addShare();
    }

    function returnWishListRemoveItem(Page\MyWishList $myWishList) {
        $myWishList->removeItem();
    }

    function addItemsInWishlist(Page\MyWishList $myWishList) {
        $myWishList->addItemsInWishlist();
    }


}

