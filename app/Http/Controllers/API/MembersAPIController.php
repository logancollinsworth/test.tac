<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Actions\Customers\HandleIncomingCustomer;

class MembersAPIController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function create_pre_member(HandleIncomingCustomer $action)
    {
        $results = $action->execute();

        return response()->json($results);
    }
}
