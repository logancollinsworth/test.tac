<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use LogsActivity, SoftDeletes;

    protected $fillable = ['page', 'name','url', 'schedule_start', 'schedule_end', 'active'];

    protected static $logAttributes = ['page','name','url','active'];

    public function getImagesforAPage($page)
    {
        $results = false;

        $record = $this->where('page', '=', $page)
            ->where('active', '=', 1)
            ->whereRaw('(schedule_start IS NULL OR ((schedule_start <= NOW()) AND (NOW() <= schedule_end)))')
            ->get();

        if(count($record) > 0)
        {
            $results = [];

            foreach($record as $def)
            {
                $results[$def->name] = $def->url;
            }
        }

        return $results;
    }

    public function getImagesforAPageByName($page, $name)
    {
        $results = false;

        $record = $this->where('page', '=', $page)
            ->where('name', '=', $name)
            ->where('active', '=', 1)
            ->first();

        if(!is_null($record))
        {
            $results = $record->url;
        }

        return $results;
    }

    public function reverseImageOrientation($orientation)
    {
        if($orientation = 'left'){

        }else{

        }
    }
}
