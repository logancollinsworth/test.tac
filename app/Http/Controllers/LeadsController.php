<?php

namespace App\Http\Controllers;

use App\Services\Actions\Leads\CaptureCombo6Lead;
use Illuminate\Http\Request;
use App\Services\LeadCaptureService;
use Illuminate\Support\Facades\Validator;
use App\Services\Actions\Leads\CaptureEnrollmentPageLead;
use App\Stores;

class LeadsController extends Controller
{
    protected $request, $lead_svc, $stores;

    public function __construct(Request $request, LeadCaptureService $lead_svc, Stores $stores)
    {
        $this->request = $request;
        $this->lead_svc = $lead_svc;
        $this->stores = $stores;
    }

    public function process_lead($lead)
    {
        $results = ['success' => false];

        activity($lead.'-lead-capture')
            ->withProperties($this->request->all())
            ->log('The capture request');

        switch($lead)
        {
            case 'free-pass':
                $results = $this->process_free_pass();
                break;

            default:
                $results['reason'] = 'Invalid lead type';
        }

        return response()->json($results);
    }

    public function process_free_pass()
    {

        $results = ['success' => false, 'reason' => 'Bad Data'];

        $data = $this->request->except('_token');

        $validated = Validator::make($data, [
            'fname' => 'bail|required',
            'lname' => 'bail|required',
            'email' => 'bail|required',
            'mobile' => 'bail|required',
            'foundOut' => 'bail|required|exists:stores,ClubId',
            'consent' => 'bail|required',
        ]);

        if ($validated->fails())
        {
            foreach($validated->errors()->toArray() as $col => $msg)
            {
                $results['reason'] = $msg;
                break;
            }
        }
        else
        {

            $data['reason'] = 'Free Pass';
            $data['club_id'] = $data['foundOut'];
            $data['consent'] = $data['consent'] == 'true';

            // clean passed in phone number (strip all non-numeric chars)
            $data['mobile'] = preg_replace('/\D+/', '', $data['mobile']);

            $lead = $this->lead_svc->create_free_pass_lead($data);

            if($lead)
            {
                $results['success'] = true;
                $results['lead'] = $lead;
                unset($results['reason']);
            }

        }
        return $results;
    }

}
