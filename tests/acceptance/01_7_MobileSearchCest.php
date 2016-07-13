<?php
use \Step\Acceptance;

/**
 * @group mobileSearch
 */
class SearchCest
{

    function T985SearchTops10(Page\Search $search, \AcceptanceTester $I) {
        $search->search();
        $search->searchWrong('Top10');
        $I->seeElement('//a[@class="gs-title"]/b[text()="Top 10"]');

    }

    function T986SearchNoResult(Page\Search $search, \AcceptanceTester $I) {
        $search->search();
        $search->searchWrong('invalid');
        $I->see('No Results', '//div[@class="gs-snippet"]');
    }

    function T987SearchPlural(Page\Search $search, \AcceptanceTester $I) {
        $search->search();
        $search->searchWrong('Lawnflite Mini Rider 60RDE Ride-On Mower');
        $I->see('Lawnflite Mini Rider 60RDE Ride', '//div[@class="gsc-results gsc-webResult"]/div//b');

    }

    function T988SearchMisspelling(Page\Search $search, \AcceptanceTester $I) {
        $search->search();
        $search->searchWrong('Lawn7Garden');
        $I->see('Showing results for Lawn 7 Garden', '//div[@class="gsc-webResult gsc-result"]');
        $I->see('Search instead for Lawn7Garden', '//div[@class="gsc-webResult gsc-result"]');
    }

    function T989SearchFewResult(Page\Search $search, \AcceptanceTester $I) {
        $search->searchInvalid('Lawn Garden Tractors');
        $I->seeElement('//div[@class="gsc-result-info"]');
        $I->see('Lawn Garden Tractors','//div[@class="std"]');
    }






}

