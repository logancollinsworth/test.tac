<?php

use App\Images;
use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    public function run()
    {
        $entry_array = [
            'programs' => [
                'programs_services' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/programs-services-Image.png',
                    'active' => 1
                ],
                'group_training' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/group-training-image.png',
                    'active' => 1
                ],
                'one_on_one' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/one-on-one-training-image.png',
                    'active' => 1
                ],
                'group_cycling' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/group-cycling-image.png',
                    'active' => 1
                ],
                'physical_therapy' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/physical-therapy-image.png',
                    'active' => 1
                ],
                'massage_services' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/massage-services-image.png',
                    'active' => 1
                ],
                'tanning' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/tanning-image.png',
                    'active' => 1
                ]
            ],
            'free-pass' => [
                'banner' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/free-pass-header.png',
                    'active' => 1
                ]
            ],
            'global-header' => [
                'header_logo' => [
                    'url' => '/img/header-logo.png',
                    'active' => 1
                ]
            ],
            'footer' => [
                'CTA_images' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/CTA-image.png',
                    'active' => 1
                ],
                'CTA_Offer' => [
                    'url' => 'https://theathleticclubassets.s3.amazonaws.com/CTA_Image-3.png',
                    'active' => 1
                ],
            ]
        ];

        foreach($entry_array as $page => $entry)
        {
            foreach($entry as $name => $data)
            {
                $record = Images::wherePage($page)
                    ->whereName($name)
                    ->whereActive(1)
                    ->first();

                if(is_null($record))
                {
                    Images::create([
                        'page' => $page,
                        'name' => $name,
                        'url' => $data['url'],
                        'active' => $data['active']
                    ]);
                }
            }
        }
    }
}
