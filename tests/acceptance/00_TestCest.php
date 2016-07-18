<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function T985SearchTops10(Page\Search $search, \AcceptanceTester $I) {
        $search->search();
        $search->searchWrong('Top10');
        $I->seeElement('//a[@class="gs-title"]/b[text()="Top 10"]');

    }





}

