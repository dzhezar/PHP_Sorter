<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 18:25
 */

namespace App\Logger;

use NullObj\LoggerInterface;

class PrintLogger implements LoggerInterface
{
    public function log(string $str)
    {
        echo $str;
    }
}