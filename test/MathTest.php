<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.18.
 * Time: 16:37
 */

namespace Tdd\Test;
use Tdd\Math;


class MathTest extends \PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $math = new Math();

        $this->assertEquals(2, $math->sum(1,1));
    }

}
