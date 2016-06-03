<?php
use \Step\Acceptance;

/**
 * @group search
 */
class SearchCest
{

    function checkSearchInvalid(Page\Search $search, \AcceptanceTester $I) {
        $search->search();
        $search->searchInvalid('invalid');
        $I->see('No Results', '//div[@class="gs-snippet"]');
    }

    function checkSearchWrong(Page\Search $search, \AcceptanceTester $I) {
        $search->searchInvalid('инвалид');
        $I->see('No Results', '//div[@class="gs-snippet"]');
    }

    function checkSearchNumber(Page\Search $search, \AcceptanceTester $I) {
        $search->searchInvalid('Lawn7Garden');
        $I->see('Showing results for Lawn 7 Garden', '//div[@class="gsc-webResult gsc-result"]');
        $I->see('Search instead for Lawn7Garden', '//div[@class="gsc-webResult gsc-result"]');
    }

    function checkSearchSuccess(Page\Search $search, \AcceptanceTester $I) {
        $search->searchInvalid('Lawn Garden Tractors');
        $I->seeElement('//div[@class="gsc-result-info"]');
        $I->see('Lawn Garden Tractors','//div[@class="std"]');
    }






}

