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
    private $delimiter;

    public function __construct()
    {
        $this->result = 0;
        $this->delimiter = ',';
    }

    public function add($stringNumbers)
    {
        if(empty($stringNumbers))
        {
            return $this->result;
        }

        if ($this->isDelimiterChanged($stringNumbers))
        {
            $this->setDelimiter($this->getDelimiterFromStringNumbers($stringNumbers));
        }

        $newLineParts = explode("\n", $stringNumbers);

        foreach ($newLineParts as $newLine)
        {
            $stringNumberParts = explode($this->getDelimiter(), $newLine);

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

    private function isDelimiterChanged($stringOfNumbers)
    {

    }

    private function getDelimiterFromStringNumbers($stringOfNumbers)
    {

    }

    private function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
    }

    private function getDelimiter()
    {
        return $this->delimiter;
    }
}