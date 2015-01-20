<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.20.
 * Time: 17:22
 */

namespace Tdd\Test;
use Tdd\StringCalculator;


class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public $stringCalculator;

    public function setUp()
    {
        $this->stringCalculator = new StringCalculator();
    }

    public function testEmptyString()
    {
        $this->assertEquals(0, $this->stringCalculator->add(""));
    }

    /**
     * @dataProvider oneNumberDataProvider
     *
     * @param $numberString
     */
    public function testOneNumberString($numberString)
    {
        $this->assertEquals((int)$numberString, $this->stringCalculator->add($numberString));
    }

    public function oneNumberDataProvider()
    {
        return array(
            array("1"),
            array("4"),
        );
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgumentNumberException()
    {
        $this->stringCalculator->add("2,4,6,7");
    }

    /**
     * @dataProvider twoNumberDataProvider
     *
     * @param $numberString
     */
    public function testTwoNumberString($stringNumbers, $expectedValue)
    {
        $this->assertEquals($expectedValue, $this->stringCalculator->add($stringNumbers));
    }

    public function twoNumberDataProvider()
    {
        return array(
            array("stringNumbers"=>"1,4", "expectedValue" => 5),
            array("stringNumbers"=>"1,8", "expectedValue" => 9)
        );
    }
}
