<?php 

class FirstAndroidCest
{
    public function _before(AndroidGuy $I)
    {
    }

    // tests
    public function tryToTest(AndroidGuy $I)
    {
        $I->implicitWait(['ms' => 3500,]);
        $text = $I->byId('id_of_button')->getText();
        $I->assertEquals('Hello, World!', $text);
    }
}
