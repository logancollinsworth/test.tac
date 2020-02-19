<?php

namespace App;

use Bouncer;
use App\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\SoftDeletes;
use Silber\Bouncer\Database\Concerns\HasRoles;
use Backpack\CRUD\CrudTrait;

class Stores extends Model
{
    use LogsActivity, SoftDeletes, UuidModel;

    protected $fillable = ['ClubId','ClubName', 'Address1', 'City', 'State', 'ZipCode', 'phone', 'email', 'default_promo'];

    protected static $logAttributes = ['ClubId','ClubName'];

    public function getStoreIdFromClubId($club_id = 0)
    {
        $store_id = false;

        $record = $this->where('ClubId', '=', $club_id)->first();

        if(!is_null($record))
        {
            $store_id = $record->id;
        }

        return $store_id;
    }
}
