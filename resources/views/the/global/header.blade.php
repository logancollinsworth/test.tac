<header>
    <?php
        $imgs = new \App\Images();
        $head_img = $imgs->getImagesforAPageByName('global-header', 'header_logo')
    ?>

    <div id="headerWrapper">
        <div id="headerLeft">
            <div class="header-head">
                <a href="/"><img src="{{ $head_img }}" id="logoImg"/></a>
            </div>
        </div>

        <div id="headerRight">
            <div class="header-head">
                <div id="headerControlPanel">
                    <a onclick="alert('Not available in assessment build.')"><i class="fal fa-user"></i> <b>MEMBERSHIPS</b></a>
                    <a onclick="alert('Not available in assessment build.')" class="cp-loc"><i class="far fa-map-marker-alt"></i> <b>LOCATIONS</b></a>
                    <a onclick="alert('Not available in assessment build.')" class="cp-loc" target="_blank"><i class="fal fa-lock-alt"></i> <b>MEMBER LOGIN</b></a>
                    <button type="button" id="burger" onclick="openNav()"><i class="far fa-align-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
