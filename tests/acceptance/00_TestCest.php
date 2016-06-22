<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function myInvitations(Step\Acceptance\LoginSteps $I, \Page\MyAccountMowDirect $accountMowDirect){
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->myInvitationsCheck('test@1.com');
    }






}

