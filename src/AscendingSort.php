<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 17:02
 */

namespace App;


class AscendingSort implements SorterInterface
{
    public function sort($array): array
    {
        $numbers = $array->getNumbers();
        asort($numbers);
        return $numbers;
    }
}