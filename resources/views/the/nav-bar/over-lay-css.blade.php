<style>
    .join-button {
        background: transparent;
        font-family: 'Roboto Condensed', sans-serif;
        color: #fff;
        font-size: 1.1em;
        font-weight: 600;
        letter-spacing: 0.225em;
        padding: 1.25em 2em 1.25em 2em;
        margin-top: 1em;
        transition: background 500ms ease;
    }

    .join-button:hover {
        background: #23a9e1;
        cursor: pointer;
    }

    #joinButton, .join-button {
        border: #23a9e1 solid 0.12em;
        font-size: 1em;
    }

    #joinButton2 {
        border: #fff solid 0.12em;
        width: 100%
    }

    /* Overlay Menu */
    @media screen {
        .overlay {
            height: 100%;
            width: 25%;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 100%;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-x: hidden;
            transition: 0.7s;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            display:none;
        }

        .overlay-content {
            width: 100%;
            display: flex;
            flex-flow: column;

        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 1.25em;
            font-weight: 600;
            display: block;
            transition: 0.3s;
            color: #fff;
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            float: right;
            margin-right: 1em;
            margin-top: 0.25em;
        }

        #overlayLinks {
            margin-left: 2em;
        }

        .overlay-link {
            margin-left: 1em;
            margin-top: 0.25em;
        }

        .small-overlay-link {
            font-size: 0.9em !important;
            margin-left: 2em;
            margin-left: 1.4em;
        }

        .small-overlay-link i {
            color: #23a9e1;
            font-size: 1.2em;
            font-weight: 500;
        }

        .small-overlay-link b {
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            margin-left: 0.25em;
            letter-spacing: 0.1em;
            font-weight: 400;

        }

        .cp-loc {
            margin-right: 2em !important;
        }

        #overlayJoinButton {
            margin-top: 7em;
            margin-left: 4em;
            margin-right: 4em;
        }

        @media screen and (max-height: 450px) {
            .overlay a {font-size: 20px}
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }

        @media screen and (max-width:767px) {
            .overlay {
                height: 100%;
                width: 100%;
            }
        }
    }
    /* End Overlay Menu */
</style>

<script>function openNav() {
        $('#myNav').fadeIn();
        if(md.phone() || $(window).width() <= 767) {
            document.getElementById("myNav").style.left = "0";
        }
        else {
            document.getElementById("myNav").style.left = "75%";
        }

    }

    function closeNav() {
        document.getElementById("myNav").style.left = "100%";
        $('#myNav').fadeOut()
    }
</script>
