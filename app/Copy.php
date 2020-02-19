<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Copy extends Model
{
    use LogsActivity, SoftDeletes;

    protected $table = 'copy';

    protected $fillable = ['page', 'name', 'title', 'desc', 'style', 'cascade_position'];

    public function getVerbiageforAPage($page)
    {
        $results = false;

        $record = $this->where('page', '=', $page)
            ->where('active', '=', 1)
            ->get();

        if(count($record) > 0)
        {
            $results = [];

            foreach($record as $def)
            {
                if($def->style == 'normal')
                {
                    $results[$def->name] = $def->desc;
                }
                else if($def->style == 'cascade')
                {
                    $results[$def->name] =  [
                        'title' => $def->title,
                        'img' => null,
                        'img_orientation' => $def->cascade_position,
                        'desc' => $def->desc
                    ];
                }

            }
        }

        return $results;
    }

    public function getVerbiageforAPageByName($page, $name)
    {
        $results = false;

        $record = $this->where('page', '=', $page)
            ->where('name', '=', $name)
            ->where('active', '=', 1)
            ->first();

        if(!is_null($record))
        {
            $results = $record->desc;
        }

        return $results;
    }
}
