<?php

namespace App\Services;

use App\Leads;

class LeadCaptureService extends GatewayService
{
    protected $leads;

    public function __construct(Leads $leads)
    {
        parent::__construct('prospect');
        $this->leads = $leads;
    }

    public function create_free_pass_lead($data, $type = 'free-pass')
    {
        $results = false;

       //@todo - complete this business logic.

        return $results;
    }

}
