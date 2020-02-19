<style>
    header {
        background: black;
        color: #fff;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10;
    }

    #headerRight .header-head {
        float: right;
    }

    #burger:hover {
        background: #fff;
        cursor: pointer;
        color: black;
    }

    @media screen and (max-width: 767px) {
        #headerWrapper {
            display: grid;
            grid-template-columns: 90% auto;
            grid-auto-rows: auto;
            margin: 2em 1.25em 2em 1.75em;
        }

        #logoImg {
            margin-left: -0.95em;
            margin-top: 0em;
            width: 91%;
        }

        #headerControlPanel a {
            display: none;
        }

        #burger {
            background: transparent;
            color: #fff;
            font-size: 1.5em;
            border: transparent solid 0.12em;
            transition: background 500ms ease;
        }
    }

    @media screen and (min-width: 768px) {
        #headerWrapper {
            display: grid;
            grid-template-columns: 25% auto;
            grid-auto-rows: auto;
            margin: 2.5em 2em 2.5em 3em;
        }

        #logoImg {
            width: 95%;
            margin-left: -0.95em;
            margin-top: 1em;
        }

        #headerControlPanel a {
            margin-right: 1.5em;
            font-size: 0.9em;
            text-decoration: none;
        }

        #headerControlPanel a i {
            color: #23a9e1;
        }

        #headerControlPanel a b {
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
    }
</style>
