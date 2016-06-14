<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{



    function T965TestACheckboxFilter(Step\Acceptance\FiltersSteps $I, \Page\MobileFilters $filtersMowDirect) {
        $filtersMowDirect->filtersCheckbox();
        $I->checkFilters();
    }




}

