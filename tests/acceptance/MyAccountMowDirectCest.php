<?php

/**
 * Created by PhpStorm.
 * User: obana
 * Date: 31.05.16
 * Time: 10:46
 */
class MyAccountMowDirectCest



{
    /*
    function Search(Step\Acceptance\Steps $I, \Page\SearchMowDirect $searchMowDirect) {
        $searchMowDirect->searchMowDirect('Husvarna 321', 'bds');
    }


    function AccountInformationChange(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->accountInformationMowDirect('Test','Test1','Test2');
    }
*/
    function addressPage(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->addDefaultBillingAddress('Test2','Test2','333333333','Test Address1','Test City1','321321');
        $accountMowDirect->changeShippingAddress('Test3','Test3','4444444','Test Address2','Test City2','231231');
        $accountMowDirect->addNewAddress('Test4','Test4','555555555','Test Address3','Test City3','312312');
    }








}