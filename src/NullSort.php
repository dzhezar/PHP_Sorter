<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 18:40
 */

namespace App;


class NullSort implements SorterInterface
{

    public function sort($array)
    {
        return null;
        //do nothing
    }
}