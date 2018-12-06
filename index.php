<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 17:38
 * @param $content
 */

require_once 'vendor/autoload.php';

use App\Context;
use App\NumbersArray;




require_once "src/console helper.php";

writeln('BEGIN TESTING STRATEGY PATTERN');
writeln('');

$array = new NumbersArray([3,2,1,5,6,4]);

$strategyContext1 = new Context('Atgyftytf');
$strategyContext2 = new Context("Descending");

writeln('test 1 - Ascending sorting');
var_dump($strategyContext1->executeSort($array));
writeln('');

writeln('test 2 - Descending sorting');
var_dump($strategyContext2->executeSort($array));
writeln('');
writeln('END TESTING STRATEGY PATTERN');