<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 18:26
 */

namespace App\Logger;

use NullObj\LoggerInterface;

class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
        // do nothing
    }
}