@extends('layouts.home')

@section('extra-header-stuff')
<style>
    body {
        height: 100%;
        width: 100%;
        margin: 0;
    }

    h1, h4 {
        text-transform: uppercase;
    }

    #content {
        display: flex;
        flex-flow: column;
        font-family: 'Roboto', sans-serif;
    }

    #bannerRight .banner-head {
        float: right;
    }

    #burger:hover {
        background: #fff;
        cursor: pointer;
        color: black;
    }

    #callToActionWrapper .short-solid-line {
        display: block;
        height: 1px;
        border: 0;
        width: 5%;
        border-top: 0.2em solid #ccc;
        margin: 1.5em 47%;
        padding: 0;
    }

    .section-heading {
        text-align: center;
    }

    .section-heading h1 {
        font-weight: 900;
        font-size: 3.5em;
        margin-bottom: 0;
        margin-top: 2.5em;
        line-height: 55px;
    }

    .section-heading h4 {
        font-family: 'Roboto Condensed', sans-serif;
    }

    #mediaWrapper {
        margin-top: 1em;
        width: 100%;
        background: transparent;
    }

    #placeholderImg {
        width: 100%;
    }

    #placeholderImg2 {
        width: 100%;
    }

    #detailsGrid {
        width: 100%
    }

    #details {
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
        width: 75%;
        margin: 4em 17.5% 4em 17.5%;
    }

    .embed-container {
        max-width: 100%;
    }

    iframe {
        width: 100%;
    }

    #joinButton {
        background-color: #23a9e1;
    }

    #joinButton:hover {
        background-color: transparent;
    }

    @media screen and (max-width: 767px) {
        #bigBanner {
            background: url('{{ $images['hero_bg'] }}') gray center right -10em no-repeat;
            background-size: cover;
            color: #fff;
            padding-bottom: 3em;
        }

        #bannerWrapper {
            display: grid;
            grid-template-columns: auto;
            grid-auto-rows: 11% auto;
            margin: 2em 1.25em 2em 1.75em;
        }

        #bannerLeft {
            display: flex;
            flex-flow: column;
        }

        #logoImg {
            width: 75%;
            margin-left: 0.5em;
        }

        .short-solid-line {
            width: 9%  !important;
            margin: 1.5em 47% 1.5em 0 !important;
        }

        #bannerControlPanel a {
            display: none;
        }

        #burger {
            background: transparent;
            color: #fff;
            font-size: 1.5em;
            border: transparent solid 0.12em;
            transition: background 500ms ease;
        }

        #callToActionWrapper {
            margin-left: 0.5em;
        }

        #callToActionWrapper h1 {
            font-style: normal;
            font-weight: 900;
            font-size: 4em;

            margin-bottom: 0.25em;
            margin-top: 0;
            text-transform: uppercase;
        }

        #callToActionWrapper h3 {
            font-weight: normal;
            font-style: normal;
            font-size: 17px;
            line-height: 100%;

            letter-spacing: 0.2em;
            text-transform: uppercase;

        }

        #callToActionWrapper p {
            font-style: normal;
            font-weight: 300;
            font-size: 15px;
            line-height: 156%;
            width: 65%;
        }

        #bannerLeft .empty-space {
            height: 10em;
        }


        .no-mobile-break {
            display:none !important;
        }

        .mobile-break {
            display:unset!important;
        }

        #joinButton, .join-button {
            width:85%;
        }

        .section-heading h4 {
            font-size: 1.5em;
            letter-spacing: 0.2em;
            margin-top: 0;
        }

        .grid-detail {
            width: 100%;
            text-align: center;
        }

        .gd-icon {
            color: #23a9e1;
            font-size: 4em;
        }

        .grid-detail h2 {
            font-weight: normal;
            letter-spacing: 0.15em;
            font-size: 2em;
        }

        .grid-detail p {
            font-family: 'Roboto Condensed', sans-serif;
            color: black;
            font-size: 1.25em;
            letter-spacing: 0.05em;
            font-weight: 300;
        }

        .grid-middle {
            margin-top: 2em;
            margin-bottom: 2em;
        }

        iframe {
            height: 18em;
        }
    }

    @media screen and (min-width: 768px) {
        #bigBanner {
            background: url('{{ $images['hero_bg'] }}') gray center no-repeat;
            background-size: cover;
            color: #fff
        }

        /*
        #bannerWrapper {
            display: grid;
            grid-template-columns: 50% auto;
            grid-auto-rows: auto;
            margin: 3em 2em 6em 2em;
        }
        */

        #bannerWrapper {
            display: grid;
            grid-template-columns: auto;
            grid-auto-rows: 11% auto;
            margin: 3em 2em 6em 2em;
        }


        #bannerLeft {
            display: flex;
            flex-flow: column;
        }

        #bannerBottom {
            text-align: center;
            margin-top: 5em;
        }

        .banner-head {
            margin-bottom: 8em;
        }

        #logoImg {
            width: 80%;
            margin-left: 0.5em;
        }

        #bannerControlPanel a {
            margin-right: 1.5em;
            font-size: 0.9em;
            text-decoration: none;
        }

        #bannerControlPanel a i {
            color: #23a9e1;
        }

        #bannerControlPanel a b {
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            margin-left: 0.25em;
            letter-spacing: 0.1em;
            font-weight: 400;

        }

        #burger {
            background: transparent;
            color: #fff;
            font-size: 1.5em;
            border: #fff solid 0.12em;
            transition: background 500ms ease;
        }

        #burger i {
            padding: 0.4em 0.25em 0.35em 0.2em;
        }

        #burger i:hover {
            color: black;
        }

        #callToActionWrapper {
            margin-left: 3.5em;
        }

        #callToAction {
            z-index: 2;
            margin-bottom: -4px;
        }

        #callToActionWrapper h1 {
            font-style: normal;
            font-weight: 900;
            font-size: 4.5em;
            line-height: 90px;

            margin-bottom: 0.25em;
            margin-top: 0;
            text-transform: uppercase;
        }

        #callToActionWrapper h3 {
            font-weight: normal;
            font-style: normal;
            font-size: 25px;
            line-height: 100%;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            margin: 2em 0 1.5em 0;

        }

        #callToActionWrapper p {
            font-style: normal;
            font-weight: 300;
            font-size: 20px;
            line-height: 156%;
            margin: 0 10% 0 10%;
        }

        #bannerLeft .empty-space {
            height: 13em;
        }

        .no-mobile-break {
            display:unset !important;
        }

        .mobile-break {
            display:none !important;
        }

        #detailsWrapper  {
            padding-top: 2em;
        }

        .section-heading h4 {
            font-size: 1.1em;
            letter-spacing: 0.2em;
            margin-top: 0;
        }

        .grid-detail {
            width: 33%;
        }

        .gd-icon {
            color: #23a9e1;
            font-size: 3em;
        }

        .grid-detail h2 {
            font-weight: normal;
            letter-spacing: 0.15em;
        }

        .grid-detail p {
            font-family: 'Roboto', sans-serif;
            color: black;
            font-size: 1.1em;
            width: 69%;
            font-weight: 400;
            line-height: 1.4em;
        }

        #salesPoints {
            padding: 0em 2em;
        }

        .join-button {
            margin-top: 2em;
            margin-left: 1em;
            margin-right: 1em;
        }
    }
</style>
@endsection

@section('content')
    <div id="content">
        <div id="bigBanner">
            @include('the.home.section.big-banner-alt')
        </div>

        <div id="salesPoints">
            @include('the.home.section.membership-details')
        </div>

        <div id="callToAction">
            @include('the.home.section.gallery')
        </div>
    </div>
@endsection
