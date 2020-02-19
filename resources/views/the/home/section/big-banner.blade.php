<div id="bannerWrapper">
    <div id="bannerLeft">
        <div class="banner-head">
            <img src="/img/header-logo.png" id="logoImg"/>
        </div>

        <div class="empty-space"></div>

        <div id="bannerActionCall">
            <div id="callToActionWrapper">
                <h1 class="no-mobile-break" style="display:none">{!! $hero['headline'] !!}</h1>
                <h1 class="mobile-break" style="display:none">{!! $hero['headline-m'] !!}</h1>
                <h3>{!! $hero['subheading'] !!}</h3>
                <span class="short-solid-line"></span>
                <p>{!! $hero['paragraph'] !!}</p>
                <button type="button" id="joinButton" class="join-button" onclick="window.location.href= '/join'"><b>{!! $hero['button-text'] !!}</b></button>
            </div>
        </div>
    </div>

    <div id="bannerRight">
        <div class="banner-head">
            <div id="bannerControlPanel">
                <a href="/members"><i class="fal fa-user"></i> <b>MEMBERSHIPS</b></a>
                <a href="/locations" class="cp-loc"><i class="far fa-map-marker-alt"></i> <b>LOCATIONS</b></a>
                <button type="button" id="burger" onclick="openNav()"><i class="far fa-align-right"></i></button>
            </div>
        </div>
    </div>
</div>

