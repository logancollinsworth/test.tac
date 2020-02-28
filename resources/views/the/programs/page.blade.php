@extends('layouts.app')

@section('extra-header-stuff')
    <style>
        body {
            height: 100%;
            width: 100%;
            margin: 0;
        }

        #content {
            display: flex;
            flex-flow: column;
            font-family: 'Roboto', sans-serif;
            margin-bottom: 5em;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 2em;
        }

        .section-heading h1 {
            font-weight: 900;
            font-size: 3.5em;
            margin-bottom: 1em;
            margin-top: 1.75em;
            line-height: 55px;
        }

        #segmentWrapper {
            display: flex;
            flex-flow: column;
        }

        .verbiage-wrapper p {
            font-family: 'Roboto', sans-serif;
            color: black;
            font-size: 1em;
            font-weight: 300;
            width: 80%;
        }

        .verbiage-wrapper h2 {
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            margin-bottom: 0;
        }

        .verbiage-wrapper ul {
            list-style: none;
            font-size: 1.2em;
            line-height: 1.6em;
        }

        .no-dot i {
            color: #23a9e1;
            margin-right: 0.55em;
        }

        .blue-read-more {
            font-family: 'Roboto', sans-serif;
            color: #23a9e1;
            margin-left: 0.25em;
            letter-spacing: 0.1em;
            font-weight: 600;
            text-decoration: none;
        }

        .gal-row-link {
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 600;
            color: #23a9e1;
            font-size: 1.2em;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.15em;
        }

        @media screen and (max-width: 767px) {
            .segment-row {
                display: flex;
                flex-flow: column;
                justify-content: center;
            }

            .verbiage-wrapper {
                text-align: center;
                margin-bottom: 3em;
            }

            .verbiage-wrapper p {
                font-weight: 400;
                margin: 3em 20% 0em 10%;
                font-size: 1.2em;
            }

            .verbiage-wrapper ul {
                font-weight: 100;
                margin: 0em 30% 0em 30%;
                text-align: left;
            }

            .row-right .media-wrapper {
                /*display: none;*/
                text-align: center;
            }

            .row-left .media-wrapper {
                /*display: none;*/
                text-align: center;
            }

            .media-wrapper img {
                width: 75%;
            }

            .title-image {
                width: 85%;
            }

            .special-img-head {
                width: 85%;
            }
        }

        @media screen and (min-width: 768px) {
            .segment-row {
                display: grid;
                grid-template-rows: 1fr;
                grid-template-columns: 50% 50%;
            }

            .row-right .media-wrapper {
                grid-column: 2;
                grid-row: 1;
            }

            .row-right .verbiage-wrapper {
                grid-column: 1;
                grid-row: 1;
            }

            .row-left .media-wrapper {
                grid-column: 1;
                grid-row: 1;
            }

            .row-left .verbiage-wrapper {
                grid-column: 2;
                grid-row: 1;
            }

            .img-img {
                width: 85%;
                height: 85%;
            }

            .verbiage-wrapper {
                display:flex;
                flex-flow: column;
                justify-content: center;
                margin-left: 0;
                margin-right: 0;
            }

            .title-image {
                width: 65%;
            }
            @media screen and (max-width: 1023px) {
                .special-img-head {
                    width: 85%;
                }
            }
        }

        @media screen and (min-width: 1024px) {
            #segmentWrapper {
                margin-left: 12.5%;
                margin-right: 12.5%;
            }

            .title-image {
                width: 50%;
            }

            .special-img-head {
                width: 50%;
            }
        }

    </style>
@endsection

@section('content')
    <div id="content">
        <div class="section-heading">
            <h1>{!! $title !!}</h1>
            <p>{!! $subtitle !!}</p>
        </div>

        <div id="segmentWrapper">
            @foreach($programs as $program)
            <div class="segment-row row-{{ $program['img_orientation'] }}">
                <div class="media-wrapper col">
                    <img src="{{ $program['img'] }}" class="img-img row-img-{{ $program['img_orientation'] }}" />
                </div>

                <div class="verbiage-wrapper col">
                    <h2>{!! $program['title'] !!}</h2>
                    {!! $program['desc'] !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

