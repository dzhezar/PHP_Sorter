<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 17:06
 */

namespace App;


class Context
{
    private $strategy;

    public function __construct($strategy_ind_id)
    {
        switch ($strategy_ind_id){
            case "Ascending":
                $this->strategy = new AscendingSort();
                break;
            case "Descending":
                $this->strategy = new DescendingSort();
                break;
        }
    }

    public function executeSort(NumbersArray $numbers)
    {
        return $this->strategy->sort($numbers);
    }
}