<?php


class MaintenanceModeTestCest
{
    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGET('/health/maintenance');
        $I->seeResponseContainsJson(array('status' => 'FAIL'));
    }
}
