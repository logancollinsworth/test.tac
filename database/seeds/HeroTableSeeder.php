<?php

use App\Copy;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class HeroTableSeeder extends Seeder
{
    public function run()
    {

            Copy::create([
                'page' => 'home',
                'headline' => 'Elevating The Experience',
                'headline-m' => 'Elevating The Experience',
                'subheading' => 'Over $4 Million in Improvements',
                'paragraph' => 'The Athletic Club is one of the nation\'s leading upscale health and fitness clubs. We have seven luxurious facilities in three states, with over 1,000 employees and over 30,000 members.',
                'button-text' => 'ENROLL NOW!',
                'learn-text' => 'LEARN MORE',
                'misc-text'  => '3-DAY COMPLIMENTARY MEMBERSHIP',
            ]);
    }
}
