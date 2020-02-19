<?php

namespace App\Http\Controllers;

use App\Copy;
use App\Images;
use App\Models\Pages;
use App\NewsArticles;
use Illuminate\Http\Request;
use App\Services\TemplateService;

class HomeController extends Controller
{
    protected $request, $images;

    public function __construct(Request $request, Images $imgs, Copy $copy)
    {
        $this->request = $request;
        $this->images = $imgs;
        $this->copy = $copy;
    }

    public function index()
    {
        $args = [];

        // @todo - Make this section dynamic.
        $args['hero'] = [
            'headline' => 'Elevating The Experience',
            'headline-m' => 'Elevating The Experience',
            'subheading' => 'Over $4 Million in Improvements',
            'paragraph' => 'The Athletic Club is one of the nation\'s leading upscale health and fitness clubs. We have seven luxurious facilities in three states, with over 1,000 employees and over 30,000 members.',
            'button-text' => 'ENROLL NOW!',
            'learn-text' => 'LEARN MORE',
            'misc-text'  => '3-DAY COMPLIMENTARY MEMBERSHIP',
        ];

        $args['mem_deets_subtitle'] = 'LEARN MORE ABOUT<br class="mobile-break"> THE ATHLETIC CLUB <a href="/about"><i class="fas fa-arrow-alt-right"></i></a>';

        $args['membership_details'] = [
            [
                'icon' => 'fal fa-users',
                'title' => 'A PLACE FOR <br> FAMILIES',
                'desc' => 'Our mission is to meet the health and fitness goals of our members and guests in an environment that is friendly, clean, welcoming and enjoyable for all ages.',
            ],
            [
                'icon' => 'fal fa-book-heart',
                'title' => 'WHO WE ARE <br><br>',
                'desc' => 'THE Athletic Club provides a high-level luxury health club experience to our members and guests.  Founded by veterans in the fitness industry, WE BELIEVE in integrating cutting edge technology, incredible new equipment and impeccable customer service.  More importantly, WE BELIEVE in YOU, YOUR RESULTS, YOUR FITNESS EXPERIENCE & BELIEVE NO ONE GETS THERE ALONE!  As a preeminent luxury fitness collection in the Midwest we look forward to serving your fitness needs.',
            ],
            [
                'icon' => 'fal fa-trophy-alt',
                'title' => 'SUPERIOR QUALITY, <br>  SUPERIOR VALUE',
                'desc' => 'We are strongly committed to providing services for and actively engaging our members in programs and activities for all ages and ability levels.',
            ]
        ];

        // get the images for the view
        $args['images'] = [
            'hero_bg' => env('APP_URL').'/img/Hero-BG.jpg',
            'header_logo_mobile' => env('APP_URL').'/img/header-logo.png',
            'header_logo' => env('APP_URL').'/img/header-logo.png',
            'video_ph_reg' => 'https://www.youtube-nocookie.com/embed/VBm3UoxThrQ',
            'video_ph_hover' => '/img/Video-Placeholder-coming-soon.jpg',
        ];//$this->images->getImagesforAPage('/');

        return view('the.index', $args);
    }

    public function programs()
    {
        $args = [];

        $args['programs'] = [
            [
                'title' => 'There\'s something <br> for everyone',
                //'img' => '/img/programs-services-Image.png',
                'img' => $this->images->getImagesforAPageByName('programs', 'programs_services'),
                'img_orientation' => 'left',
                'desc' => '<p> We are one of the nation\'s leading operators of upscale health and fitness clubs. We have nine facilities in four states. We take great pride in all of our clubs. Each offers the latest fitness equipment and programs. What really makes us different is our professional, member-oriented staff. It\'s our job to do whatever we can to help our members improve the quality of their life through fitness, recreation, and fun.</p>'
            ],
            [
                'title' => 'Group Training',
                //'img' => '/img/group-training-image.png',
                'img' => $this->images->getImagesforAPageByName('programs', 'group_training'),
                'img_orientation' => 'right',
                'desc' => '<p>We welcome you to the TAC Group Fitness Program and look forward to helping you reach your goals. We offer all of the best classes including, Kickboxing, Crunch, Combo, Toning, Step, Weights, Yoga, Dancing, Mat Pilates and More! Everything you need to get in shape and stay fit.</p>'
            ],
            [
                'title' => 'One-on-One Training',
                //'img' => '/img/one-on-one-training-image.png',
                'img' => $this->images->getImagesforAPageByName('programs', 'one_on_one'),
                'img_orientation' => 'left',
                'desc' => '<p>The Athletic Club wants every member to be successful in his or her quest to reach personal fitness goals. No matter what your fitness goals, we can design a program that is safe, effective and will fit into your busy schedule. Don\'t wait. Give us a call and let us help you feel and look your best.</p>'
            ],
            [
                'title' => 'Group Cycling',
                //'img' => '/img/group-cycling-image.png',
                'img' => $this->images->getImagesforAPageByName('programs', 'group_cycling'),
                'img_orientation' => 'right',
                'desc' => '<p>Cycling is simple, fun and easy to learn! It is both an aerobic and anaerobic workout performed on a stationary bicycle. Cycling is for everyone - at any age, at every level of fitness. Whether you are a beginner or an elite athlete, you can both start at the same place, and you can both successfully complete your cycling journey together.</p>'
            ],
            [
                'title' => 'Physical Therapy',
                //'img' => '/img/physical-therapy-image.png',
                'img' => $this->images->getImagesforAPageByName('programs', 'physical_therapy'),
                'img_orientation' => 'left',
                'desc' => '<p>Physical Therapy is available at the following TAC locations.  For more information about the services they provide or to set up an appointment, please call your local club.</p>'
            ],
            [
                'title' => 'Massage Services',
                //'img' => '/img/massage-services-image.png',
                'img' => $this->images->getImagesforAPageByName('programs', 'massage_services'),
                'img_orientation' => 'right',
                'desc' => '<p>The Athletic Club massage therapist offer many different massage options to fit your needs.</p>
                    <p>Massage therapy is available 7 days a week by appointment. Nonmembers are welcome!</p>'
            ],
            [
                'title' => 'Tanning',
                //'img' => '/img/tanning-image.png',
                'img' => $this->images->getImagesforAPageByName('programs', 'tanning'),
                'img_orientation' => 'left',
                'desc' => '<p>Personal tanning beds at The Athletic Club, you can achieve an all-over tan morning, noon or night - seven days a week - in the complete privacy of our individual tanning booths. Simply stop by the Front Desk. Our staff can help you plan sessions to fit your schedule and show you how to develop a deep, lasting tan. </p>'
            ],
        ];

        $args['title'] = 'PROGRAMS & SERVICES';
        $args['subtitle'] = $this->copy->getVerbiageforAPageByName('programs', 'title_subtitle');

        return view('the.programs.page', $args);
    }
}
