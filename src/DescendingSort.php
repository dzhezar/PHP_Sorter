<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 17:04
 */

namespace App;


class DescendingSort implements SorterInterface
{
    public function sort($array)
    {
        $array = $array->getNumbers();
        arsort($array);
        return $array;
    }
}