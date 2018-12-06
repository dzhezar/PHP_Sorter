<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 17:19
 */

namespace App;


class NumbersArray
{
    private $numbers =[];

    function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function getNumbers() : array
    {
        return $this->numbers;
    }
}