<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T1010T1013MobileAccountAddress(Step\Acceptance\LoginSteps $I, \Page\MyAccountMowDirect $accountMowDirect)
    {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->addDefaultBillingAddress('Test2', 'Test2', '333333333', 'Test Address1', 'Test City1', '321321');
        $accountMowDirect->changeShippingAddress('Test3', 'Test3', '4444444', 'Test Address2', 'Test City2', '231231');
        $I->deleteAddresses();
        $accountMowDirect->addNewAddress('Test4', 'Test4', '555555555', 'Test Address3', 'Test City3', '312312');
    }





}

