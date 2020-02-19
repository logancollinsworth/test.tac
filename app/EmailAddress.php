<?php

namespace App;

use App\Traits\UuidModel;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmailAddress extends Model
{
    use LogsActivity, SoftDeletes, UuidModel, CrudTrait;
    protected $table = "email_addresses";
    protected $primaryKey = 'id';

    protected static $logAttributes = ['email', 'list'];

    public function getListOfEmails($list, $club_id = '')
    {
        $results = [];

        // this is "shorthand" for $this->where('list', '=', $list)
        $records = $this->whereList($list);

        if($club_id != '')
        {
            $records = $records->where('club_id', '=', $club_id);
        }

        $records = $records->get();

        if(count($records) > 0)
        {
            foreach($records as $record)
            {
                $results[] = $record->email;
            }
        }

        return $results;
    }
}
