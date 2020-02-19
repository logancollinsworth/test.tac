<?php

namespace App\Services;

class GatewayService
{
    protected $gateway_type, $gateway;

    public function __construct($type = null)
    {
        if(!is_null($type))
        {
            $this->gateway_type = $type;
        }
    }

    /**
     * @return GatewayService | bool
     */
    public function getGateway()
    {
        $results = false;

        if(!is_null($this->gateway))
        {
            $results = $this->gateway;
        }

        return $results;
    }

    public function validateRequest($data)
    {
        $results = false;

        if(is_array($data))
        {
            $results = true;
        }

        return $results;
    }
}
