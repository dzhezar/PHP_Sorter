<?php
/**
 * Created by PhpStorm.
 * User: dzhezar-bazar
 * Date: 06.12.18
 * Time: 18:20
 */

namespace NullObj;


class Service
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function doSomething(){
        $this->logger->log('We are in '.__METHOD__);
    }
}