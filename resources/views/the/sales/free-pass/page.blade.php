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
            margin-bottom: 0;
            text-transform: uppercase;
            margin-top: 2.5em;
            line-height: 55px;
        }

        #contactWrapper {
            display: flex;
            flex-flow: column;
        }

        #mediaWrapper {
            text-align: center;
            margin-bottom: 3em;
        }

        #bannerImg {
            width: 100%;
        }

        #contactFormWrapper {
            display: flex;
            flex-flow: column;
            width: 100%;
            padding: 6em 0;
        }

        #contactFormWrapper p {
            text-align: left;
        }

        .send-button {
            background: #35A2FE;
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            letter-spacing: 0.225em;
            padding: 1.25em 2em 1.25em 2em;
            margin-top: 1em;
            width: 100%;
            border: #35A2FE solid 0.12em;
            transition: background 500ms ease;
        }

        .send-button:hover {
            background: transparent;
            color: #35A2FE;
            cursor: pointer;
        }

        #innerWrap p {
            font-size: 1.2em;
            line-height: 1.6em;
            font-weight: 400;
        }

        .picker-drop {
            height: 3em;
            font-size: 1em;
            max-width: 45.5em;
            width: 100%;
            color: lightslategray;
            border: 1px solid lightgrey;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding-left: 1em;
            background: url(/img/fa-down-chevy.png) no-repeat 97.5% #fff;
            background-size: 2%;
            margin-top: 1em;
            margin-bottom: 2em;
        }

        #checkerBox {
            display: flex;
            flex-flow: row;
        }

        #checkerBox label {
            margin-left: 1em;
        }

        @media screen and (max-width: 767px) {
            #innerWrap {
                margin-left: 15%;
                margin-right: 15%;
            }

            #contactForm {
                display: flex;
                flex-flow: column;
                justify-content: center;
                margin-bottom: 1em;
            }


            #contactForm input {
                width: 100%;
                padding: 0.5em 0 0.5em 1em;
                font-size: 1.0em;
                border: 2px solid black;
            }

            #formName {
                margin-bottom: 1em;

            }

            #formName > div, #formEmail > div {
                margin-bottom: 2em;
            }

            #formEmail {
                margin-bottom: 1em;
            }

            #contactFormWrapper textarea {
                width: 100%;
                height: 10em;
                font-size: 1.1em;
                padding: 1em;
            }

            #fnRow {
                order: 0;
            }

            #lnRow {
                order: 2;
            }

            #emRow {
                order: 3;
            }

            #moRow {
                order: 4;
            }

            .picker-drop {
                order: 5;
            }

            .c-form-elem {
                margin-bottom: 1em;
            }
        }

        @media screen and (min-width: 768px) {
            #fnRow {
                order: 0;
            }

            #lnRow {
                order: 3;
            }

            #emRow {
                order: 2;
            }

            #moRow {
                order: 4;
            }

            .picker-drop {
                order: 5;
            }

            #innerWrap {
                margin-left: 22%;
                margin-right: 22%;
            }

            #contactForm {
                display: flex;
                flex-flow: row wrap;
                justify-content: center;
                margin-bottom: 0;
            }

            #contactForm > div {
                width: 44%;
                margin: 1em;
            }

            #contactForm > #formName > div {
                margin-right: 2em;
                margin-top: 1em;
                margin-bottom: 1em;
            }

            #contactForm > #formEmail > div {
                margin-left: 1em;
                margin-top: 1em;
                margin-bottom: 1em;
            }

            #contactForm input {
                width: 85%;
                padding: 0.7em 1em 0.7em 1em;
                border: 2px solid black;
                font-size: 1.3em;
                margin: 0.25em 0.25em 0.25em 0.25em;
            }

            #contactFormWrapper textarea {
                width: 100%;
                height: 10em;
                font-size: 1.1em;
                padding: 1em;
            }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/libphonenumber-js/1.7.16/libphonenumber-js.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
@endsection

@section('content')
    <div id="content">
        <div id="contactWrapper">
            <div class="section-heading">
                <h1>FREE PASS</h1>
            </div>

            <div id="mediaWrapper">
                <img src="{{ (is_array($images) && array_key_exists('banner', $images)) ? $images['banner'] : '' }}" id="bannerImg" />
            </div>

            <div id="contactFormWrapper">
                <div id="innerWrap">
                    <p>Nothing can replace a first-hand look. During your free visit to the club, you can choose from a variety of group fitness classes to attend, play basketball or volleyball, work out in our expansive fitness center, then relax by the pool, take a steam or whirlpool, and on your way out, grab a refreshing beverage at the cafe.</p>

                    <div id="contactForm">
                        <div id="fnRow" class="c-form-elem">
                            <input type="text"  name="formFName" placeholder="First Name" v-model="fname">
                        </div>

                        <div id="emRow" class="c-form-elem">
                            <input type="text"  name="formEmail" placeholder="Email Address" v-model="email">
                        </div>

                        <div id="lnRow" class="c-form-elem">
                            <input type="text"  name="formLName" placeholder="Last Name" v-model="lname">
                        </div>

                        <div id="moRow" class="c-form-elem">
                            <input type="text"  name="formMobile" placeholder="Mobile" v-model="mobile">
                        </div>

                        <select class="picker-drop" v-model="foundOut">
                            <option value="0">Select a Club</option>
                            <optgroup v-for="(stores, state) in foundBy" :label="state">
                                <option v-for="(option, idx) in stores" v-bind:value="idx">
                                    @{{ option }}
                                </option>
                            </optgroup>
                        </select>
                    </div>

                    <div id="checkerBox">
                        <input type="checkbox" name="optIn" value="true" id="checkboxOptin" v-model="consent"/>
                        <label for="optIn">
                            <small>I hereby consent to receive phone, text and email messages from or on behalf of The Athletic Club at the telephone number and email provided. I understand that consent is not a condition of purchase.</small>
                        </label>
                    </div>

                    <button type="button" class="send-button" @click="validateAndSubmit()">GET A FREE VISIT</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footscripts')
    <script>
        let vjs = new Vue({
            el: '#contactFormWrapper',
            data: {
                fname: '',
                lname: '',
                email: '',
                mobile: '',
                consent: false,
                foundOut: 0,
                foundBy: {!! json_encode($found_by) !!},
            },
            computed: {},
            methods: {
                validateAndSubmit: function validateAndSubmit() {
                    let result = true;

                    if(result === true && this.fname === '') {
                        result = false;
                        alert('Please enter your first name.');
                    }

                    if(result === true && this.lname === '') {
                        result = false;
                        alert('Please enter your last name.');
                    }

                    if(result === true && this.foundOut === 0) {
                        result = false;
                        alert('How did you hear about us?');
                    }

                    if(result === true && this.validEmail() !== true) {
                        result = false;
                        alert('Please enter a valid email address.');
                    }

                    if(result === true && this.validMobile() !== true) {
                        result = false;
                        alert('Please enter a valid mobile phone #.');
                    }

                    if(result === true && this.consent !== true) {
                        result = false;
                        alert('Please check the consent box.');
                    }

                    if(result === true) {
                        this.fireContactRequest();
                    }
                },
                fireContactRequest: function fireContactRequest() {
                    let _this = this;

                    $.ajax({
                        url: '/leads/free-pass',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('input[name="_token"]').val()
                        },
                        data: {
                            fname: _this.fname,
                            lname: _this.lname,
                            email: _this.email,
                            mobile: _this.mobile,
                            foundOut: _this.foundOut,
                            consent: _this.consent
                        },
                        success: function (data) {
                            if ('success' in data) {
                                if (data['success'] === true) {
                                    alert('Thanks, ' + data['lead']['fname'] + '! We will notify you via email when your free pass is ready!');
                                    gtag_report_conversion('/');
                                    //window.location.href = '/'
                                    //$('body').loadingModal('destroy');
                                } else {
                                    alert(data['reason']);
                                    //$('body').loadingModal('destroy');
                                }
                            } else {
                                alert('Server returned unreadable response. Please try again.');
                                //$('body').loadingModal('destroy');
                            }
                        },
                        error: function (e) {
                            alert('Could not save your information. Please try again.');
                            console.log(e);
                            //$('body').loadingModal('destroy');
                        }
                    });
                },
                validEmail: function validEmail() {
                    let results = false;

                    if (this.email !== '') {
                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        results = re.test(String(this.email).toLowerCase());
                    }

                    return results;
                },
                validMobile: function validMobile() {
                    let results = false;

                    if (this.mobile !== '') {
                        let ph = libphonenumber.parsePhoneNumberFromString(this.mobile, 'US');

                        if(ph !== undefined) {
                            if(libphonenumber.isValidNumber(ph.number))
                            {
                                results = true;
                            }

                        }
                    }

                    return results;
                }
            },
            mounted: function () {
                console.log('Free Pass section loaded.')
            }
        });
    </script>
@endsection
