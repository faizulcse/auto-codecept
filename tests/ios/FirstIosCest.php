<?php 

class FirstIosCest
{
    public function _before(IosGuy $I)
    {
    }

    // tests
    public function tryToTest(IosGuy $I)
    {
        $I->implicitWait(['ms' => 10000,]);
        $I->assertEquals('Hello, World!', 'Hello, World!');
        $I->amGoingTo("lock phone");
        $I->lock([null]);
    }
}
