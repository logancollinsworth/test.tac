<style>
    footer {
        font-family: 'Roboto', sans-serif;
        text-align: center;
    }

    .mobile-space {
        display: none;
    }

    @media screen and (min-width: 768px) {
        #weirdFootStuff {
            display: flex;
            flex-flow: column;
            justify-content: center;
            margin-top: 5em;
            margin-bottom: 5em;
        }

        #iconsWrapper a {
            color: black;
            font-size: 2.25em;
            margin-left: 0.5em;
            margin-right: 0.5em;
        }

        #iconsWrapper a:visited, #linksWrapper a:visited {
            color: black;
        }

        #navigationLinks {
            margin-top: 1em;
            margin-bottom: 1em;
        }

        #linksWrapper a {
            color: black;
            font-size: 0.9em;
            margin-left: 0.5em;
            margin-right: 0.5em;
            text-decoration: none;
            font-weight: 300;
        }

        #legalMumboJumbo p {
            color: slategray;
            font-size: 0.8em;
            margin-left: 0.5em;
            margin-right: 0.5em;
            text-decoration: none;
            font-weight: 300;
        }

        #legalMumboJumbo p a {
            color: slategray;
            margin-left: 0.5em;
            margin-right: 0.5em;
            text-decoration: none;
        }
    }

    @media screen and (max-width: 767px) {
        #weirdFootStuff {
            display: flex;
            flex-flow: column;
            justify-content: center;
            margin-top: 3em;
            margin-bottom: 5em;
        }

        #iconsWrapper a {
            color: black;
            font-size: 3em;
            margin-left: 0.5em;
            margin-right: 0.5em;
        }

        #iconsWrapper a:visited, #linksWrapper a:visited {
            color: black;
        }

        #navigationLinks {
            margin-top: 1em;
            margin-bottom: 1em;
        }

        #linksWrapper {
            display:flex;
            flex-flow: column;
        }

        #linksWrapper a {
            color: black;
            font-size: 1.25em;
            margin-top: 0.25em;
            margin-bottom: 0.25em;
            text-decoration: none;
            font-weight: 300;
        }

        #legalMumboJumbo {
            font-size: 1.25em;
        }

        #legalMumboJumbo p {
            color: slategray;
            margin-left: 0.5em;
            margin-right: 0.5em;
            text-decoration: none;
            font-weight: 300;
        }

        #legalMumboJumbo p a {
            color: slategray;
            margin-left: 0.5em;
            margin-right: 0.5em;
            text-decoration: none;
        }

        .mobile-space {
            display: unset;
        }
    }

    @media screen and (min-width: 620px) and (max-width: 767px) {
        #actualCallToAction h1 {
            font-size: 6.5em !important;
            line-height: 85px !important;
        }
    }

    @media screen and (max-width: 767px) {
        #prefootCallToAction {
            font-family: 'Roboto', sans-serif;
            background: black;
            color: #fff;

            display: flex;
            flex-flow: column;
        }

        #actualCallToAction h1 {
            font-style: normal;
            font-weight: 900;
            margin-bottom: 0.5em;

            margin-top: 0.5em;
            font-size: 4.35em;
            line-height: 75px;
        }

        #actualCallToAction h3 {
            font-weight: normal;
            font-style: normal;
            font-size: 30px;
            line-height: 100%;
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }

        #ctaButtonPanel {
            margin-left: 3em;
            margin-bottom: 3em;
        }

        #actualCallToAction h3 {
            font-size: 35px;
        }

        #rhombusImageWrapper, #emptyRow {
            display: none;
        }

        .panel-button {
            background: transparent;
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            letter-spacing: 0.225em;
            padding: 1.25em 2em 1.25em 2em;
            margin-top: 1em;
            border: 2px solid #fff;
            width: 90%;
            transition: background 500ms ease;
        }

        .panel-button-full {
            background: #23a9e1;
            border: 2px solid #23a9e1;
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            letter-spacing: 0.225em;
            padding: 1.25em 2em 1.25em 2em;
            margin-top: 1em;
            width: 90%;
        }

        .panel-button:hover {
            background: #23a9e1;
            cursor: pointer;
            border: 2px solid #23a9e1;
        }

        .panel-button-full:hover {
            background: transparent;
            cursor: pointer;
        }
    }

    @media screen and (min-width: 768px){
        #prefootCallToAction {
            font-family: 'Roboto', sans-serif;
            background: black;
            color: #fff;

            margin-top: 5em;
        }

        #actualCallToAction {
            margin-top: 5em;
            margin-bottom: 5em;
            @if(Route::currentRouteName() != 'home' && Route::currentRouteName() != 'home.offers')
            width: 60%;
            @endif
        }

        #actualCallToAction h1 {
            font-style: normal;
            font-weight: 900;
            margin-bottom: 0.5em;
            margin-left: -10px;

            margin-top: 0.5em;
            font-size: 6.25em;
            line-height: 90px;
        }

        #ctaButtonPanel {
            margin-left: 2.5em;
            @if(Route::currentRouteName() == 'home')
            margin-bottom: 3em;
            @else
            padding-bottom: 3em;
            @endif
        }

        #actualCallToAction h3 {
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }

        .panel-button {
            background: transparent;
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            letter-spacing: 0.225em;
            padding: 1.25em 2em 1.25em 2em;
            margin-top: 1em;
            margin-left: 3.5em;
            border: 2px solid #fff;
            width: 15em;
            transition: background 500ms ease;;
        }

        .panel-button-full {
            background: #23a9e1;
            border: 2px solid #23a9e1;
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            letter-spacing: 0.225em;
            padding: 1.25em 2em 1.25em 2em;
            margin-top: 1em;
            width: 15em;
            transition: background 500ms ease;
        }

        .panel-button:hover {
            background: #23a9e1;
            cursor: pointer;
            border: 2px solid #23a9e1;
        }

        .panel-button-full:hover {
            background: transparent;
            cursor: pointer;
        }
    }
</style>

@switch(Route::currentRouteName())
    @case('home')
    <style>
        @media screen and (min-width: 768px){
            #prefootCallToAction {
                font-family: 'Roboto', sans-serif;
                background: black;
                color: #fff;

                margin-top: unset;
                display: grid;
                /*flex-flow: row; */
                grid-template-columns: 50% 50%;
                grid-template-rows: 1fr 5%;
            }

            #actualCallToAction {
                grid-column: 1;
            }

            #rhombusImageWrapper {
                grid-column: 2;
                grid-row-start: 1;
                grid-row-end: 3;
                z-index: 1;
                margin-top: -0.35em;
            }

            #rhombusImg {
                width: 100%;
                height: 100%;
            }

            #emptyRow {
                grid-row: 2;
                grid-column-start: 1;
                grid-column-end: 3;
                background: #fff;
            }

            #actualCallToAction h1 {
                font-style: normal;
                font-weight: 900;
                margin-bottom: 0.25em;

                margin-top: 0.5em;
                font-size: 4.25em;
                line-height: 56px;
            }

            #ctaButtonPanel {
                margin-left: 2.5em;
                margin-bottom: 1em;
            }

            #actualCallToAction h3 {
                font-weight: normal;
                font-style: normal;
                font-size: 14px;
                line-height: 100%;
                letter-spacing: 0.2em;
                text-transform: uppercase;
            }

            .panel-button {
                background: transparent;
                font-family: 'Roboto Condensed', sans-serif;
                color: #fff;
                font-size: 1.1em;
                font-weight: 600;
                letter-spacing: 0.225em;
                padding: 1.25em 2em 1.25em 2em;
                margin-top: 1em;
                border: 2px solid #fff;
                width: 15em;
            }

            .panel-button-full {
                background: #23a9e1;
                border: 2px solid #23a9e1;
                font-family: 'Roboto Condensed', sans-serif;
                color: #fff;
                font-size: 1.1em;
                font-weight: 600;
                letter-spacing: 0.225em;
                padding: 1.25em 2em 1.25em 2em;
                margin-top: 1em;
                width: 15em;
            }

            .panel-button:hover {
                background: #23a9e1;
                cursor: pointer;
                border: 2px solid #23a9e1;
            }

            .panel-button-full:hover {
                background: transparent;
                cursor: pointer;
            }
        }

        @media screen and (min-width: 1007px) {
            #actualCallToAction h1 {
                margin-top: 1.75em;
            }

            #actualCallToAction h3 {
                font-size: 21px;
            }

            .panel-button-full {
                width: unset;
            }

            .panel-button {
                width: unset;
                margin-left: 1em;
            }
        }

        @media screen and (min-width: 1176px) {
            #actualCallToAction h1 {
                margin-top: 1.25em;
                font-size: 6em;
                line-height: 80px;
            }

            #ctaButtonPanel {
                margin-left: 5em;
            }

            #actualCallToAction h3 {
                font-size: 24px;
            }
        }
    </style>
    @break;

    @case('home.offers')
    <style>
        @media screen and (min-width: 768px){
            #prefootCallToAction {
                font-family: 'Roboto', sans-serif;
                background: black;
                color: #fff;

                margin-top: unset;
                display: grid;
                /*flex-flow: row; */
                grid-template-columns: 50% 50%;
                grid-template-rows: 1fr 5%;
            }

            #actualCallToAction {
                grid-column: 1;
            }

            #rhombusImageWrapper {
                grid-column: 2;
                grid-row-start: 1;
                grid-row-end: 3;
                z-index: 1;
                margin-top: -0.35em;
            }

            #rhombusImg {
                width: 100%;
                height: 100%;
            }

            #emptyRow {
                grid-row: 2;
                grid-column-start: 1;
                grid-column-end: 3;
                background: #fff;
            }

            #actualCallToAction h1 {
                font-style: normal;
                font-weight: 900;
                margin-bottom: 0.25em;

                margin-top: 0.5em;
                font-size: 4.25em;
                line-height: 56px;
            }

            #ctaButtonPanel {
                margin-left: 2.5em;
                margin-bottom: 1em;
            }

            #actualCallToAction h3 {
                font-weight: normal;
                font-style: normal;
                font-size: 14px;
                line-height: 100%;
                letter-spacing: 0.2em;
                text-transform: uppercase;
            }

            .panel-button {
                background: transparent;
                font-family: 'Roboto Condensed', sans-serif;
                color: #fff;
                font-size: 1.1em;
                font-weight: 600;
                letter-spacing: 0.225em;
                padding: 1.25em 2em 1.25em 2em;
                margin-top: 1em;
                border: 2px solid #fff;
                width: 15em;
            }

            .panel-button-full {
                background: #23a9e1;
                border: 2px solid #23a9e1;
                font-family: 'Roboto Condensed', sans-serif;
                color: #fff;
                font-size: 1.1em;
                font-weight: 600;
                letter-spacing: 0.225em;
                padding: 1.25em 2em 1.25em 2em;
                margin-top: 1em;
                width: 15em;
            }

            .panel-button:hover {
                background: #23a9e1;
                cursor: pointer;
                border: 2px solid #23a9e1;
            }

            .panel-button-full:hover {
                background: transparent;
                cursor: pointer;
            }
        }

        @media screen and (min-width: 1007px) {
            #actualCallToAction h1 {
                margin-top: 1.75em;
            }

            #actualCallToAction h3 {
                font-size: 21px;
            }

            .panel-button-full {
                width: unset;
            }

            .panel-button {
                width: unset;
                margin-left: 1em;
            }
        }

        @media screen and (min-width: 1176px) {
            #actualCallToAction h1 {
                margin-top: 1.25em;
                font-size: 6em;
                line-height: 80px;
            }

            #ctaButtonPanel {
                margin-left: 5em;
            }

            #actualCallToAction h3 {
                font-size: 24px;
            }
        }
    </style>
    @break;
@endswitch


<div id="prefootCallToAction">
    <div id="actualCallToAction">
        <h1>START YOUR ATHLETIC CLUB EXPERIENCE</h1>
        <div id="ctaButtonPanel">
            <h3>CHECK OUT OUR MEMBERSHIP OPTIONS TODAY</h3>
            <button type="button" id="anotherJoinButton" class="panel-button-full" onclick="alert('Not available in assessment build.')"><b>JOIN THE CLUB</b></button>
            <button type="button" id="freePassButton" class="panel-button" onclick="window.location.href= '/free-pass'"><b>FREE PASS</b></button>
        </div>
    </div>
    @switch(Route::currentRouteName())
        @case('home')
        <div id="rhombusImageWrapper">
            <?php
            $imgs = new \App\Images();
            $cta_img = $imgs->getImagesforAPageByName('footer', 'CTA_images')
            ?>
            <img src="{{ $cta_img }}" id="rhombusImg">
        </div>
        @break

        @case('home.offers')
        <div id="rhombusImageWrapper">
            <?php
                $imgs = new \App\Images();
                $cta_img = $imgs->getImagesforAPageByName('footer', 'CTA_Offer')
            ?>
            <img src="{{ $cta_img }}" id="rhombusImg">
        </div>
        @break
    @endswitch

    <div id="emptyRow"></div>
</div>

<footer>
    <div id="weirdFootStuff">
        <div id="socialMediaIcons">
            <div id="iconsWrapper">
                <a onclick="alert('Not available in assessment build.')"><i class="fab fa-twitter"></i></a>
                <a onclick="alert('Not available in assessment build.')"><i class="fab fa-facebook-f"></i></a>
                <a onclick="alert('Not available in assessment build.')"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div id="navigationLinks">
            <div id="linksWrapper">
                <a href="/">Home</a>
                <a href="/programs">Programs & Services</a>
                <a onclick="alert('Not available in assessment build.')">Classes</a>
                <a onclick="alert('Not available in assessment build.')">About</a>
                <a onclick="alert('Not available in assessment build.')">Contact Us</a>
                <a onclick="alert('Not available in assessment build.')">FAQs</a>
            </div>
        </div>
        <div id="legalMumboJumbo">
            <p>
                <i class="fal fa-copyright"></i>
                <span>2020. Cape & Bay. All rights reserved.</span>
                <br class="mobile-space">
                <a onclick="alert('Not available in assessment build.')">Privacy Policy</a> |
                <a onclick="alert('Not available in assessment build.')">Terms of use</a>
            </p>
        </div>
    </div>
</footer>
