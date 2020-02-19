<div id="bannerWrapper">
    <div id="bannerTop">
        <div id="bannerRight">
            <div class="mobile-break">
                <img src="{{ $images['header_logo_mobile'] }}" id="logoImg"/>
            </div>

            <div class="banner-head">
                <div id="bannerControlPanel">
                    <a @click="notAvailable"><i class="fal fa-user"></i> <b>MEMBERSHIPS</b></a>
                    <a @click="notAvailable" class="cp-loc"><i class="far fa-map-marker-alt"></i> <b>LOCATIONS</b></a>
                    <a @click="notAvailable" class="cp-loc" target="_blank"><i class="fal fa-lock-alt"></i> <b>MEMBER LOGIN</b></a>
                    <button type="button" id="burger" onclick="openNav()"><i class="far fa-align-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div id="bannerBottom">
        <div class="banner-head no-mobile-break">
            <img src="{{ $images['header_logo'] }}" id="logoImg"/>
        </div>

        <div id="bannerActionCall">
            <div id="callToActionWrapper">
                <h1 class="no-mobile-break" style="display:none">{!! $hero['headline'] !!}</h1>
                <h1 class="mobile-break" style="display:none">{!! $hero['headline-m'] !!}</h1>
                <h3>{!! $hero['subheading'] !!}</h3>
                <span class="short-solid-line"></span>
                <p>{!! $hero['paragraph'] !!}</p>
                <button type="button" id="joinButton" class="join-button" @click="notAvailable"><b>{!! $hero['button-text'] !!}</b></button>
                <button type="button" id="learnButton" class="join-button" onclick="window.location.href= '/free-pass'"><b>{!! $hero['misc-text'] !!}</b></button>
            </div>
        </div>
    </div>
</div>
