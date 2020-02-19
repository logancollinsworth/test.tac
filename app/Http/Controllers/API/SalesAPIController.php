<?php

namespace App\Http\Controllers\API;

use App\PromoAmenities;
use App\Services\Actions\Employees\GetCRMEmployees;
use App\Services\Actions\Enroll\FireOutCombo6EnrollNotification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use App\Transformers\MembershipTransformer;
use App\Services\Actions\Clubs\GetClubWithPlan;
use App\Services\Actions\Enroll\ValidatePayGatePromo;
use App\Services\Actions\Enroll\SubmitPaymentAuthCapt;
use App\Services\Actions\Memberships\GetActiveDefaultMembershipsForClub;
use Ixudra\Curl\Facades\Curl;

class SalesAPIController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function club_info(GetClubWithPlan $action)
    {
        $results = ['success' => false];

        $data = $this->request->all();
        if(array_key_exists('clubID', $data))
        {
            $club_info = $action->execute($data['clubID']);

            if($club_info)
            {
                $results = $club_info;
            }
        }


        return response()->json($results);
    }

    public function validate_code(ValidatePayGatePromo $action)
    {
        $results = $action->execute();

        return response()->json($results);
    }

    public function membership_info(GetActiveDefaultMembershipsForClub $action, PromoAmenities $amen)
    {
        $results = ['success' => false];

        $data = $this->request->all();

        $validated = Validator::make($data, [
            'clubID' => 'bail|required|exists:stores,ClubId',
            'promocode' => 'bail|required'
        ]);

        if ($validated->fails())
        {
            $results['reason'] = $validated->errors()->toArray();
        }
        else
        {
            $memberships = $action->execute($data['clubID'], $data['promocode']);
            $amenities = $amen->amenitiesViaClubId($data['clubID']);

            if(!$amenities)
            {
                $amenities = collect([]);
            }

            if($memberships && count($memberships) > 0)
            {
                $rags = $memberships->toArray();
                $shipt = fractal()
                ->collection($rags)
                ->transformWith(new MembershipTransformer($data['clubID']))->toArray();
                //$shipt = $shipt->getResource()->getData();
                $rags = $this->includeAmenities($amenities, $rags);

                foreach($rags as $idx => $ship)
                {
                    $rags[$idx]['membership_transformed'] = $shipt['data'][$idx];
                    $p_name = array_keys($shipt['data'][$idx]);
                    $rags[$idx]['membership_transformed'][$p_name[0]]['amenities'] = $ship['amenities'];

                    // @todo - fucking delete this right away
                    if(env('FUCK_UP_132', false) && ($data['clubID'] == 'TR21'|| $data['clubID'] == 'TR26'))
                    {
                        $is_zircon_plan = (strpos(strtolower($ship['Description']), 'zircon') !== false);
                        $is_plus_plan = (strpos($ship['Description'], 'Plus') !== false);
                        $is_platinum_plan = (strpos($ship['Description'], 'Platinum') !== false);

                        if($is_platinum_plan && (!$is_plus_plan))
                        {
                            unset($rags[$idx]);
                        }
                    }
                }
                $rags = array_values($rags);
                // @todo - fucking delete this above right away
                $results = ['success' => true, 'memberships' => $rags];
            }
        }

        return response()->json($results);
    }

    public function submit_payment(SubmitPaymentAuthCapt $action)
    {
        $results = $action->execute();

        return response()->json($results);
    }

    public function employees(GetCRMEmployees $action)
    {
        $results = $action->execute();

        return response()->json($results);
    }

    public function combo6_addon(FireOutCombo6EnrollNotification $action)
    {
        $results = $action->execute($this->request->all());

        return response()->json($results);
    }

    public function templates()
    {
        $results = false;

        $data = $this->request->all();
        $url = config('paramount-crm.urls.sales').'/WebSales/LoadTemplates';

        $response = Curl::to($url)
            ->withData($data)
            //->asJson(true)
            ->post();

        if($response)
        {
            $results = $response;
        }

        return $results;
    }

    public function staging_info()
    {
        $results = false;

        $data = $this->request->all();
        $url = config('paramount-crm.urls.sales').'/WebSales/GetStagingInfo';

        $response = Curl::to($url)
            ->withData($data)
            ->asJson(true)
            ->post();

        if($response)
        {
            $results = $response;
        }

        return $results;
    }

    private function includeAmenities(Collection $amenities, array $memberships)
    {
        $results = $memberships;

        foreach($memberships as $plan => $deets)
        {
            $reference = strtolower($deets['Description']);

            $a_group = [];
            $amens = [];
            if (strpos($reference, 'zircon') !== false) {
                $amens = $amenities->where('plan_generic_name', '=', 'zircon');
            }
            else if(strpos($reference, 'platinum') !== false) {
                if(strpos($reference, 'plus') !== false) {
                    $amens = $amenities->where('plan_generic_name', '=', 'plus');
                }
                else
                {
                    $amens = $amenities->where('plan_generic_name', '=', 'platinum');
                }
            }
            else if($deets['PromoCode'] === 'charter') {
                $amens = $amenities->where('plan_generic_name', '=', 'platinum');
            }

            if(count($amens) > 0)
            {
                $a_group = $amens->toArray();
            }

            $results[$plan]['amenities'] = array_values($a_group);
        }

        return $results;
    }
}
