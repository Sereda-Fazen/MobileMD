<?php

/**
 * @group mobileFilter
 */
class MobileFiltersCest
{


    function T992MobileCheckboxFilter(Step\Acceptance\FiltersSteps $I, \Page\MobileFilters $filtersMowDirect) {
        $filtersMowDirect->filtersCheckbox();
        $I->checkFilters();
    }

}