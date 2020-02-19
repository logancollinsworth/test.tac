<?php

namespace App\Http\Middleware;

use Bouncer;
use Landlord;
use App\Employees;

use Closure;

class ScopeBouncer
{
    /**
     * The Bouncer instance.
     *
     * @var \Silber\Bouncer\Bouncer
     */
    protected $bouncer, $employees;

    /**
     * Constructor.
     *
     * @param \Silber\Bouncer\Bouncer  $bouncer
     */
    public function __construct(Bouncer $bouncer)
    {
        $this->bouncer = $bouncer;
    }

    /**
     * Set the proper Bouncer scope for the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Here you may use whatever mechanism you use in your app
        // to determine the current tenant. To demonstrate, the
        // $tenantId is set here from the user's account_id.
        //$tenantId = $request->user()->account_id;
        /*
        if($this->bouncer->is(backpack_user())->a('gm'))
        {

            if(is_null($employee))
            {

            }
            else
            {
                $tenantId = $employee->store_id;
                $this->bouncer->scope()->to($tenantId);
            }

        }
        */
        if(!is_null(backpack_user())) {
            if(!Bouncer::is(backpack_user())->a('god', 'admin'))
            {
                if(Bouncer::is(backpack_user())->a('executive'))
                {

                }
                else
                {
                    $employee = backpack_user()->employee()->first();
                    $store = \App\Stores::find($employee->store_id);
                    Landlord::addTenant('store_id', $employee->store_id);
                    //Landlord::addTenant('store_id', $store);
                }
            }
        }
        else {
            return redirect()->guest(backpack_url('login'));
        }

        return $next($request);
    }
}
