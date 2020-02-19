<?php

use App\Stores;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class StoresTableSeeder extends Seeder
{
    public function run()
    {
        $entry_array = [
            'CL1' => '132nd & Center (Omaha)',
            'CL2' => '84th & Q (Omaha)',
            'CL3' => 'Midtown Crossing (Omaha)',
            'CL4' => '70th & A (Lincoln)',
            'CL5' => 'Overland Park',
            'CL6' => 'Olathe',
            'CL8' => 'W. Des Moines'
        ];

        foreach($entry_array as $clubId => $clubName)
        {
            $record = Stores::where('ClubId', '=', $clubId)
                ->first();

            if(is_null($record))
            {
                Stores::create([
                    'ClubId' => $clubId,
                    'ClubName' => $clubName
                ]);
            }
        }
    }
}
