<?php

/**
 * @group mobileFilter
 */
class MobileFiltersCest
{


    function T965TestACheckboxFilter(Step\Acceptance\FiltersSteps $I, \Page\MobileFilters $filtersMowDirect) {
        $filtersMowDirect->filtersCheckbox();
        $I->checkFilters();
    }

}