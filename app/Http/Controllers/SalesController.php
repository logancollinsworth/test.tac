<?php

namespace App\Http\Controllers;

use App\Copy;
use App\Images;
use App\Stores;
use Illuminate\Http\Request;
use App\Services\Actions\Clubs\GetClubWithPlan;
use App\Services\Actions\Enroll\GetEnrollPageDeets;

class SalesController extends Controller
{
    protected $clubs, $copy, $request, $images;

    public function __construct(Request $request, Images $imgs, Stores $clubs, Copy $copy)
    {
        $this->request = $request;
        $this->images = $imgs;
        $this->clubs = $clubs;
        $this->copy = $copy;
    }

    public function free_pass()
    {
        $args = [];

        $args['found_by'] = [
            'Nebraska' => [
                'CL1' => '132nd & Center (Omaha)',
                'CL2' => '84th & Q (Omaha)',
                'CL3' => 'Midtown Crossing (Omaha)',
                'CL4' => '70th & A (Lincoln)',
            ],
            'Kansas' => [
                'CL5' => 'Overland Park',
                'CL6' => 'Olathe',
            ],
            'Iowa' => [
                'CL8' => 'W. Des Moines'
            ]
        ];

        $args['images'] = $this->images->getImagesforAPage('free-pass');

        return view('the.sales.free-pass.page', $args);
    }
}
