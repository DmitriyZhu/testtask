<?php

namespace src\Integration;


class DataProviderOtherNewIntegration
{
    private $host;
    private $user;
    private $password;

    /**
     * @param $host
     * @param $user
     * @param $password
     */
    public function __construct($host, $user, $password)
    {
        parent::__construct($host, $user, $password)
    }
    
    /**
     * @param array $request
     *
     * @return array
     */
    public function get(array $request)
    {
        // returns a response from other external service
    }
}
