<?php

namespace App\Services;

use App\Leads;
use App\Mail\NewFreePassLeadNotification;
use Illuminate\Support\Facades\Mail;

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

        //@todo - complete this business logic.
        $results = false;

        $lead = new Leads;
        $lead->createNewLead($data);

        if(Leads::find($lead)){
            $results = true;
        }

        Mail::to('logan@lynxtdc.com')->queue(new NewFreePassLeadNotification());


        return $results;
    }

}
