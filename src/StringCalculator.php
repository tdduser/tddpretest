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
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function add($stringNumbers)
    {
        if(empty($stringNumbers))
        {
            return $this->result;
        }

        $newLineParts = explode("\n", $stringNumbers);

        foreach ($newLineParts as $newLine)
        {
            $stringNumberParts = explode(',', $newLine);

            $numberCount = count($stringNumberParts);

            if ($numberCount > 2)
            {
                throw new \InvalidArgumentException("Invalid argument count: " . $numberCount);
            }

            if ($numberCount === 1)
            {
                $this->result+= ((int)$stringNumberParts[0]);
            }

            if ($numberCount === 2)
            {
                $this->result+= ((int)$stringNumberParts[0] + (int)$stringNumberParts[1]);
            }
        }
        return $this->result;
    }
}