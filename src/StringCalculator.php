<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.20.
 * Time: 17:24
 */

namespace Tdd;


class StringCalculator
{
    public function add($stringNumbers)
    {
        if(empty($stringNumbers))
        {
            return 0;
        }

        $stringNumberParts = explode(',', $stringNumbers);

        $numberCount = count($stringNumberParts);

        if ($numberCount > 2)
        {
            throw new \InvalidArgumentException("Invalid argument count: " . $numberCount);
        }

        if ($numberCount === 1)
        {
            return (int)$stringNumbers;
        }

        if ($numberCount === 2)
        {
            return ((int)$stringNumberParts[0] + (int)$stringNumberParts[1]);
        }

    }
}