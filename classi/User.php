<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 04/04/2018
 * Time: 09:38
 */
class User
{
    private $logger;
    /**
     * User constructor.
     */
    public function __construct($logger)
    {
        $this->logger=$logger;
    }
    public function setUser()
    {
        $this->logger->log('User created');

    }
}