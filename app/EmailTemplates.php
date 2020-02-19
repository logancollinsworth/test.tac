<?php

namespace App;

use App\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmailTemplates extends Model
{
    use BelongsToTenants, LogsActivity, SoftDeletes, UuidModel;

    protected $tenantColumns = ['store_id'];

}
