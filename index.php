<html lang="en" class="no-touch">
<head>
    <style type="text/css">@charset "UTF-8";
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">

    <meta name="robots" content="nofollow">
    <title>snap-bang.com</title>

    <link rel="apple-touch-icon" sizes="57x57" href="app/icons/57x57.png">
    <link rel="apple-touch-icon" sizes="
        72x72" href="app/icons/72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="app/icons/114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="app/icons/144x144.png">
    <link rel="icon" type="image/png" sizes="57x57" href="app/icons/57x57.png">

    <link rel="stylesheet" href="app/css/bundle.min.css">
    <link rel="style" href="app/css/style.css">

    <script type="text/javascript" async=""
            src="https://www.gstatic.com/recaptcha/releases/vP4jQKq0YJFzU6e21-BGy3GP/recaptcha__nl.js"
            crossorigin="anonymous"
            integrity="sha384-yCAxTLWqFdv6/X1K3RdM64iw8LB/ss3qyRS407SWlYPlzpindhRUV68pB+mqAGmO"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    </script>

</head>

<body style="">
<toast></toast>
<!-- uiView:  -->
<div ui-view="" class="master-container ng-scope">
    <div id="land-bg" class="ng-scope"></div>
    <div id="land-content-container" ng-class="{'is-form': root.isForm()}" class="ng-scope is-form">
        <div class="min-row header-row" ng-class="{'is-default-login': root.isDefaultLoginPage()}">
            <div>
                <div class="max-expand-wrapper">
                    <div class="header">
                        <div class="right">
                            <button class="register ng-binding" ui-sref="landing.register" rel="nofollow"
                                    href="#/register">Registreren
                            </button><!--
                        no white space
                    -->
                            <button class="login ng-binding" ui-sref="landing.login" rel="nofollow" href="#/signin">
                                Inloggen
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <!-- ngInclude: 'app/sections2/landing-content.html' -->
            <div class="landing-teaser-fullwidth-wrapper ng-scope"
                 ng-class="{'is-default-login': root.isDefaultLoginPage()}"
                 ng-include="'app/sections2/landing-content.html'">
                <link rel="preconnect" href="https://fonts.gstatic.com" class="ng-scope">
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;500;700;900&amp;display=swap"
                      rel="stylesheet" class="ng-scope">

                <style class="ng-scope">

                    .custom-rate-mobile {
                        display: none;
                    }

                    .custom-rate {
                        margin: 20px 0;
                    }

                    .footer .country-list div.country-list-item > span.title {
                        color: #000 !important;
                    }

                    .footer .country-list {
                        margin-top: 20px !important;
                    }

                    .custom-teaser-header {
                        font-family: 'Montserrat';
                        font-size: 74px;
                        font-weight: 900;
                        line-height: 91px;
                        letter-spacing: 0px;
                        color: #FFFFFF;
                        text-shadow: 0px 3px 6px #00000029;
                    }

                    .custom-teaser-text {
                        font-family: 'Montserrat';
                        font-size: 27px;
                        font-weight: bold;
                        line-height: 48px;
                        color: #FFFFFF;
                    }

                    .second-custom-img {
                        width: 101%;
                        position: absolute;
                        bottom: -70px;
                        left: -3px;
                        transition: all 1s;
                    }

                    .custom-container {
                        z-index: 2;
                        position: relative;
                        height: 150px;
                    }

                    .custom-container .custom-container-img {
                        width: 100%;
                        position: absolute;
                        left: 0;
                        z-index: 3;
                        top: -110px;
                    }

                    .custom-wave-2 {
                        position: absolute;
                        width: 100%;
                        left: 0;
                        bottom: -250px;
                    }

                    .custom-favicon {
                        position: absolute !important;
                        top: -100px;
                        left: 350px;
                    }

                    .custom-container-two {
                        position: relative;
                    }

                    .custom-wave-3 {
                        width: 100%;
                        position: absolute;
                        left: 0;
                        z-index: 3;
                        top: -70px;
                    }

                    .custom-lock {
                        position: absolute;
                        left: 350px;
                    }

                    .custom-ghost {
                        position: absolute;
                        right: 350px
                    }

                    .custom-center {
                        width: 100%;
                        margin-top: 130px;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                    }

                    .custom-row-1 {
                        display: flex;
                        flex-direction: row;
                        width: 50%;
                        align-items: center;
                        margin-bottom: 50px;
                    }

                    .custom-row-1 hr {
                        height: 3px;
                        background: #FFFFFF;
                        width: 120px;
                    }

                    .custom-row-2 h1 {
                        font-family: 'Montserrat';
                        font-size: 41px;
                        font-weight: bold;
                        line-height: 27px;
                        letter-spacing: 0px;
                        color: #FE209D;
                    }

                    .custom-row-3 {
                        width: 45%;
                        margin: 40px 0;
                    }

                    .custom-row-3 p {
                        font-family: 'Montserrat';
                        font-size: 16px;
                        font-weight: bold;
                        line-height: 32px;
                        letter-spacing: 0px;
                        color: #FFFFFF;
                    }

                    .custom-row-4 p {
                        font-family: 'Montserrat';
                        font-size: 18px;
                        font-weight: 500;
                        line-height: 80px;
                        letter-spacing: 0px;
                        color: #FFFFFF;
                    }

                    .custom-wave-4 {
                        width: 100%;
                        position: absolute;
                        left: 0;
                        bottom: -150px;
                    }


                    [data-aos=slide-down] {
                        transform: translate3d(0, -50%, 0);
                    }

                    [data-aos=slide-up] {
                        transform: translate3d(0, 50%, 0);
                    }

                    [data-aos=slide-left] {
                        transform: translate3d(50%, 0, 0);
                    }

                    [data-aos=slide-right] {
                        transform: translate3d(-50%, 0, 0);
                    }

                    .custom-landing-body {
                        font-family: 'Montserrat', sans-serif !important;
                    }

                    body {
                        counter-reset: my-sec-counter;
                        scroll-behavior: smooth;
                    }

                    body > div.ui-page {
                        height: 100%;
                    }

                    .first-container {
                        position: relative;
                        height: calc(100vh - 130px);
                        overflow: hidden;
                        display: table;
                        margin: 0 auto;
                        float: none;
                        text-align: center;
                        width: 100%;
                        z-index: 4;
                    }

                    .first-container .bgr-favicon {
                        position: absolute;
                        left: 11%;
                        bottom: -33%;
                        transform: rotate(-40deg);
                        opacity: 0.2;
                    }

                    .first-container .bgr-favicon img {
                        position: relative;
                        width: 900px;
                    }

                    .first-container .content {
                        width: 100%;
                        max-width: 1350px;
                        margin: 0 auto;
                        float: none;
                        position: relative;
                        height: inherit;
                        display: table;
                        z-index: 2;
                    }

                    .first-container .content .max-expand-wrapper.custom {
                        text-align: left !important;
                        display: table-cell !important;
                        vertical-align: middle !important;
                        max-width: none !important;
                        width: 45% !important;
                        position: relative !important;
                        z-index: 9 !important;
                    }

                    .first-container .content .custom-landing-teaser {
                        display: table-cell;
                        vertical-align: middle;
                        width: 55%;
                        position: relative;
                    }

                    .scroll-down {
                        position: relative;
                        background-color: transparent;
                        display: table-row;
                        height: 300px;
                        margin: 0 auto;
                        float: none;
                        text-align: center;
                    }

                    .scroll-down a {
                        margin: 0 auto;
                        float: none;
                        text-align: center;
                        width: 100%;
                        display: block;
                        position: absolute;
                        left: 50%;
                        transform: translate(-50%, 0);
                    }

                    .scroll-down a img {
                        width: 35px;
                    }

                    .section-title {
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 100;
                        color: #171414;
                        opacity: 0.1;
                        font-size: 10vw;
                        text-transform: uppercase;
                        position: absolute;
                        top: 10%;
                        left: 11%;
                        transform: rotate(90deg);
                        z-index: 1;
                        transform-origin: top left;
                        white-space: nowrap;
                    }


                    /*** SECOND ***/
                    .second-container,
                    .fourth-container,
                    .sixth-container {
                        position: relative;
                        height: auto;
                        background-color: #f5f5f5;
                        padding: 100px 0;
                        z-index: 2;
                        overflow: hidden;
                    }

                    .second-container .content,
                    .fourth-container .content,
                    .sixth-container .content {
                        position: relative;
                        max-width: 1350px;
                        margin: 0 auto;
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        justify-content: center;
                        z-index: 2;
                    }

                    .second-container .content .left,
                    .fourth-container .content .left,
                    .sixth-container .content .left {
                        width: 50%;
                        position: relative;
                    }

                    .second-container .content .left {
                        text-align: left;
                    }

                    .second-container .content .left h1,
                    .sixth-container .content .left h1 {
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 900;
                        font-size: 55px;
                        line-height: 36px;
                        color: #D00E64;
                        letter-spacing: 0px;
                        text-align: left;
                        margin-bottom: 50px;
                        text-transform: uppercase;
                    }

                    .fourth-container .content .left h1 {
                        font-family: 'Montserrat';
                        font-size: 41px;
                        font-weight: bold;
                        line-height: 27px;
                        letter-spacing: 0px;
                        color: #FF0090;
                        text-transform: capitalize;
                        text-align: left;
                        margin-bottom: 50px;
                    }

                    .second-container .content .left .second-bold {
                        font-weight: bold !important;
                        margin: 20px 0 30px 0;
                    }

                    .second-container .content .left h1 span,
                    .fourth-container .content .left h1 span,
                    .sixth-container .content .left h1 span {
                        font-weight: 900;
                        color: #554EAC;
                    }

                    .second-container .content .left p,
                    .sixth-container .content .left p {
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 27px;
                        letter-spacing: 0.8px;
                        color: #000000;
                        text-align: left;
                        width: 75%;
                    }


                    .fourth-container .content .left p {
                        font-family: 'Montserrat', sans-serif;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 27px;
                        letter-spacing: 0px;
                        color: #000000;
                        text-align: left;
                        width: 75%;
                    }

                    .second-container .content .left p span {
                        font-weight: bold;
                    }

                    .custom-second-btn {
                        width: 35%;
                        height: 60px;
                        background: #FF177B 0% 0% no-repeat padding-box;
                        border-radius: 29px;
                        font-family: 'Montserrat';
                        font-size: 19px;
                        letter-spacing: 0px;
                        color: #fff;
                        transition: all 1s;
                    }

                    .custom-second-btn:hover {
                        background: #fff !important;
                        border: 2px solid #FF177B !important;
                        color: #FF177B !important;
                    }

                    .custom-second-btn2 {
                        width: 25%;
                        height: 60px;
                        background: #EA0176 0% 0% no-repeat padding-box;
                        border-radius: 29px;
                        font-family: 'Montserrat';
                        font-size: 19px;
                        letter-spacing: 0px;
                        color: #fff;
                        transition: all 1s;
                    }

                    .custom-second-btn2:hover {
                        background: transparent !important;
                        border: 2px solid #ffffff !important;
                        color: #ffffff !important;
                    }

                    .second-container .content .right,
                    .fourth-container .content .right,
                    .sixth-container .content .right {
                        width: 50%;
                        position: relative;
                    }

                    .second-container .content .right div,
                    .fourth-container .content .right div,
                    .sixth-container .content .right div {
                        text-align: center;
                    }

                    .second-container .content .right div img,
                    .fourth-container .content .right div img,
                    .sixth-container .content .right div img {
                        max-width: 100%;
                        position: relative;
                    }


                    /*** THIRD ***/

                    .third-container {
                        position: relative;
                        height: auto;
                        background-color: rgb(41, 6, 29, 0.75);
                        padding: 650px 0 650px 0;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .fifth-container {
                        position: relative;
                        height: auto;
                        background-color: rgb(41, 6, 29, 0.75);
                        padding: 750px 0 400px 0;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .third-container .content,
                    .fifth-container .content {
                        position: relative;
                        max-width: 1350px;
                        height: inherit;
                        margin: 0 auto;
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        justify-content: center;
                    }

                    .third-container .content .left,
                    .fifth-container .content .left {
                        width: 50%;
                        position: relative;
                    }

                    .third-container .content .left div,
                    .fifth-container .content .left div {
                        text-align: center;
                    }

                    .third-container .content .left div img,
                    .fifth-container .content .left div img {
                        max-width: 100%;
                        position: relative;
                    }

                    .third-container .content .right,
                    .fifth-container .content .right {
                        width: 46%;
                        margin-left: 4%;
                        position: relative;
                    }

                    .third-container .content .right h1,
                    .fifth-container .content .right h1 {
                        font-family: 'Montserrat', sans-serif;
                        font-weight: bold;
                        font-size: 41px;
                        line-height: 27px;
                        color: #FF0090;
                        letter-spacing: 0px;
                        text-align: left;
                        margin-bottom: 50px;
                        text-transform: uppercase;
                    }

                    .third-container .content .right h1 span,
                    .fifth-container .content .right h1 span {
                        color: #E92B89;
                        font-weight: 900;
                    }

                    .third-container .content .right p,
                    .fifth-container .content .right p {
                        font-family: 'Montserrat', sans-serif;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 27px;
                        letter-spacing: 0px;
                        color: #ffffff;
                        text-align: left;
                        width: 75%;
                        margin-bottom: 50px;
                    }

                    .third-container .content .right button,
                    .fifth-container .content .right button {
                        float: left;
                        background-color: transparent;
                        border: 1.5px solid #fff;
                        border-radius: 27px;
                        color: #FAFAFA;
                        letter-spacing: 0.8px;
                        padding: 15px 30px;
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 16px;
                        letter-spacing: 0.8px;
                        min-width: 116px;
                    }


                    .fourth-container .content .left button {
                        float: left;
                        background: #FF0090 0% 0% no-repeat padding-box;
                        border-radius: 27px;
                        color: #ffffff !important;
                        letter-spacing: 0.8px;
                        padding: 15px 30px;
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px;
                        letter-spacing: 0px;
                        min-width: 116px;
                        border: none !important;
                        transition: all 1s;
                    }

                    .fourth-container .content .left button:hover {
                        background: #FFFFFF !important;
                        border: 1px solid #FF0090 !important;
                        color: #FF0090 !important;
                    }

                    .third-container .content .right button:hover,
                    .fifth-container .content .right button:hover,
                    .seventh-container .content button:hover {
                        background-color: #fff;
                        color: rgb(85, 78, 172);
                    }

                    .fourth-container .content .left button {
                        border: 1.5px solid #000;
                        color: #000000;
                    }

                    .fourth-container .content .left button:hover {
                        border: none;
                        background-color: rgb(85, 78, 172);
                        color: #fff;
                    }


                    /*** FOURTH ***/
                    .fourth-container .content .left p,
                    .sixth-container .content .left p {
                        margin-bottom: 50px;
                    }


                    .fifth-container .bgr-favicon,
                    .third-container .bgr-favicon {
                        opacity: 0.3;
                    }


                    /*** SIXTH ***/
                    .sixth-container .content .left .security-icons {
                        text-align: left;
                    }

                    .sixth-container .content .left .security-icons img {
                        position: relative;
                        max-width: 100%;
                    }

                    /*** SEVENTH ***/
                    .seventh-container {
                        position: relative;
                        height: 650px;
                        background-color: rgba(85, 78, 172, 0.9);
                        padding: 150px 0 0 0;
                        overflow: hidden;
                    }

                    .third-container .bgr-favicon,
                    .fifth-container .bgr-favicon {
                        position: absolute;
                        top: 50%;
                        left: 0;
                        transform: translate(0, -50%);
                        opacity: 1;
                    }

                    .seventh-container .bgr-favicon {
                        position: absolute;
                        top: 50%;
                        left: -194px;
                        transform: translate(0, -50%);
                    }

                    .seventh-container .seventh-bgr {
                        background-image: url(app/img2/extras/swiping.png);
                        background-repeat: no-repeat;
                        background-size: contain;
                        background-position: center bottom;
                        position: absolute;
                        bottom: -1px;
                        left: 50%;
                        width: 80%;
                        transform: translate(-50%, 0);
                        height: 100%;
                        z-index: 1;
                    }

                    .seventh-container .content {
                        position: relative;
                        max-width: 1350px;
                        height: inherit;
                        margin: 0 auto;
                        float: none;
                        z-index: 2;
                    }

                    .seventh-container .content h1 {
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 40px;
                        line-height: 27px;
                        letter-spacing: 3.2px;
                        color: #FAFAFA;
                        letter-spacing: 2px;
                        text-align: center;
                        width: 100%;
                        margin-bottom: 50px;
                    }

                    .seventh-container .content button {
                        background-color: transparent;
                        border: none;
                        border: 2px solid #FFFFFF;
                        border-radius: 27px;
                        color: #FAFAFA;
                        letter-spacing: 0.8px;
                        padding: 15px 30px;
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 16px;
                        letter-spacing: 0.8px;
                        min-width: 116px;
                        margin: 0 auto;
                        float: none;
                    }


                    /*** FOOTER ***/
                    .lp-footer {
                        height: auto;
                        background-color: #ffffff;
                        color: #161616;
                        position: relative;
                        overflow: hidden;
                        z-index: 2;
                    }

                    .lp-footer .content {
                        position: relative;
                        max-width: 1350px;
                        margin: 0 auto;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        font-size: 13px;
                        z-index: 2;
                    }

                    .lp-footer .content .custom-footer-upper {
                        display: flex;
                        flex-direction: row;
                        width: 100%;
                        padding-bottom: 25px;
                        padding-top: 32px;
                    }

                    .lp-footer .content .custom-footer-upper .left {
                        flex: 1;
                        position: relative;
                        float: left;
                        text-align: left;
                    }

                    .lp-footer .content .custom-footer-upper .left .footer-logo {
                        width: 50px;
                        height: 50px;
                        background-image: url(/app/img2/extras/favicon.png);
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: contain;
                        transform: rotate(-11deg);
                    }

                    .lp-footer .content .custom-footer-upper .center {
                        flex: 12;
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        justify-content: center;
                    }

                    .lp-footer .content .custom-footer-upper .center a {
                        text-decoration: none;
                        text-align: center;
                        margin-right: 6%;
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 400;
                        font-size: 16px;
                        color: #161616;
                        letter-spacing: 1.28px;
                    }

                    .lp-footer .content .custom-footer-upper .center a:last-child {
                        margin-right: 0;
                    }

                    .lp-footer .content .custom-footer-upper .right {
                        flex: 3;
                        position: relative;
                        float: right;
                        text-align: right;
                        display: flex;
                        justify-content: flex-end;
                        align-items: center;
                    }

                    .lp-footer .content .custom-footer-upper .right .footer-country-icon-custom {
                        width: 18%;
                        margin-right: 10px;
                    }

                    .lp-footer .content .custom-footer-upper .right a.country-name-open {
                        position: relative;
                        text-decoration: none;
                        border: 1px solid #161616;
                        border-radius: 27px;
                        padding: 8px 46px 8px 25px;
                        min-width: 200px;
                        float: right;
                        text-align: center;
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        justify-content: center;
                    }

                    .lp-footer .content .custom-footer-upper .right a.country-name-open .icon {
                        bottom: 12px;
                        position: absolute;
                        right: 11px;
                        width: 14px;
                        height: 9px;
                        -webkit-transition: transform 0.5s ease;
                        -moz-transition: transform 0.5s ease;
                        -o-transition: transform 0.5s ease;
                        transition: transform 0.5s ease;
                    }

                    .lp-footer .content .custom-footer-upper .right a.country-name-open .icon::before,
                    .lp-footer .content .custom-footer-upper .right a.country-name-open .icon::after {
                        height: 1px;
                        content: "";
                        display: block;
                        width: 11px;
                        position: absolute;
                        top: 0;
                    }

                    .lp-footer .content .custom-footer-upper .right a.country-name-open .icon::before {
                        background: #161616;
                        -webkit-transform-origin: 0 0;
                        transform-origin: 0 0;
                        -webkit-transform: rotate(45deg);
                        transform: rotate(45deg);
                        left: 0;
                    }

                    .lp-footer .content .custom-footer-upper .right a.country-name-open .icon::after {
                        background: #161616;
                        -webkit-transform-origin: 100% 0;
                        transform-origin: 100% 0;
                        -webkit-transform: rotate(-45deg);
                        transform: rotate(-45deg);
                        right: 0;
                    }

                    .lp-footer .content .footer-payment-details {
                        text-align: center;
                        margin: 0 auto 15px;
                        float: none;
                    }

                    .footer-payment-details p {
                        color: #000;
                        text-align: center;
                        line-height: 20px;
                        font-size: 13px;
                    }

                    .footer-payment-details .footer-payment-icons {
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        justify-content: center;
                        margin-top: 10px;
                    }

                    .footer-payment-details .footer-payment-icons .footer-visa {
                        margin-right: 10px;
                    }

                    .lp-footer .content .custom-footer-bottom {
                        width: 100%;
                        text-align: center;
                        font-family: 'Montserrat', sans-serif;
                        font-size: 11px;
                        font-weight: 400;
                        line-height: 14px;
                        color: #161616;
                        letter-spacing: 0.88px;
                        padding-bottom: 0;
                    }

                    .visible-form {
                        display: block;
                    }

                    @media only screen and (max-width: 2250px) {
                        .custom-wave-4 {
                            bottom: -3px;
                        }
                    }


                    @media only screen and (max-width: 2000px) {
                        .third-container {
                            padding: 450px 0;
                        }

                        .fifth-container {
                            padding: 550px 0 400px 0;
                        }

                        .second-custom-img {
                            width: 120%;
                        }
                    }

                    @media only screen and (max-width: 1750px) {
                        .third-container {
                            padding: 350px 0;
                        }

                        .custom-container {
                            height: 60px;
                        }

                    }

                    @media only screen and (max-width: 1600px) {

                        .custom-container {
                            height: 70px;
                        }

                        .first-container .content {
                            max-width: 90%;
                        }

                        .seventh-container {
                            height: 600px;
                        }

                        .seventh-container .seventh-bgr {
                            width: 100%;
                        }
                    }

                    @media only screen and (max-width: 1400px) {
                        .seventh-container {
                            height: 500px;
                        }

                        .lp-footer .content .custom-footer-upper .right {
                            flex: 1.2;
                        }

                        .lp-footer .content .custom-footer-upper .right a.country-name-open {
                            padding: 8px 32px 8px 8px;
                        }

                        .lp-footer .content .custom-footer-upper .right .footer-country-icon-custom {
                            width: 14%;
                        }
                    }

                    @media only screen and (max-width: 1370px) {

                        .fifth-container {
                            padding: 400px 0 400px 0;
                        }

                        .first-container .content,
                        .second-container .content,
                        .third-container .content,
                        .fourth-container .content,
                        .sixth-container .content,
                        .seventh-container .content,
                        .lp-footer .content {
                            max-width: 90%;
                        }

                        .third-container .bgr-favicon,
                        .fifth-container .bgr-favicon {
                            left: 0;
                        }

                        .seventh-container .bgr-favicon {
                            left: -155px;
                        }

                        .third-container .bgr-favicon img,
                        .fifth-container .bgr-favicon img,
                        .seventh-container .bgr-favicon img {
                            position: relative;
                            width: 350px;
                        }

                        .second-container .content {
                            max-width: 90%;
                        }

                        .seventh-container {
                            padding: 115px 0 0 0;
                        }

                        .lp-footer .content .custom-footer-upper .center a {
                            font-size: 15px;
                            margin-right: 4%;
                        }
                    }

                    @media only screen and (max-width: 1200px) {

                        .second-container {
                            padding: 200px 0;
                        }

                        .register-container, .login-container, .forgot-container {
                            max-width: unset !important;
                        }

                        .second-custom-img {
                            width: 270%;
                        }

                        .first-container .content .max-expand-wrapper.custom {
                            width: 55% !important;
                        }

                        .second-container .content .left, .fourth-container .content .left, .sixth-container .content .left {
                            width: 62%;
                            margin-right: 3%;
                        }

                        .second-container .content .right, .fourth-container .content .right, .sixth-container .content .right {
                            width: 35%;
                        }

                        .second-container .content .left h1, .fourth-container .content .left h1, .sixth-container .content .left h1,
                        .third-container .content .right h1, .fifth-container .content .right h1 {
                            font-size: 35px;
                            line-height: 48px;
                            word-break: break-word;
                        }

                        .second-container .content .left h1 span, .fourth-container .content .left h1 span, .sixth-container .content .left h1 span,
                        .third-container .content .right h1 span, .fifth-container .content .right h1 span {
                            word-break: break-word;
                        }

                        .second-container .content .left p, .fourth-container .content .left p, .sixth-container .content .left p,
                        .third-container .content .right p, .fifth-container .content .right p {
                            width: 100%;
                        }

                        .seventh-container {
                            height: 500px;
                        }

                        .lp-footer .content .custom-footer-upper {
                            flex-direction: column;
                            width: 100%;
                            align-items: center;
                            justify-content: center;
                        }

                        .lp-footer .content .custom-footer-upper .left {
                            margin-bottom: 21px;
                        }

                        .lp-footer .content .custom-footer-upper .center {
                            margin-bottom: 40px;
                            width: 100%;
                            text-align: center;
                        }

                        .lp-footer .content .custom-footer-upper .left .footer-logo {
                            margin: 0 auto;
                            float: none;
                        }

                        .lp-footer .content .custom-footer-upper .right {
                            width: 100%;
                            margin: 0 auto;
                            float: none;
                            text-align: center;
                        }

                        .lp-footer .content .custom-footer-upper .right a.country-name-open {
                            margin: 0 auto;
                            float: none;
                            text-align: center;
                            width: 25%;
                        }
                    }

                    @media only screen and (max-width: 1050px) {
                        .custom-wave-2 {
                            bottom: -55px;
                        }
                    }


                    @media only screen and (max-width: 1000px) {
                        .first-container {
                            height: auto;
                        }

                        .seventh-container {
                            height: 450px;
                            padding: 87px 0 0 0;
                        }

                        .seventh-container .content h1 {
                            font-size: 33px;
                        }

                        .seventh-container .content button {
                            padding: 12px 30px;
                            font-size: 15px;
                        }

                        .custom-row-1 hr {
                            width: 75px;
                        }

                    }

                    @media only screen and (max-width: 900px) {
                        .first-container .content .max-expand-wrapper.custom {
                            width: 60% !important;
                        }

                        .lp-footer .content .custom-footer-upper {
                            padding-top: 44px;
                        }

                        .custom-container {
                            height: 0px;
                        }

                        .fifth-container {
                            padding: 200px 0 400px 0;
                        }

                        .custom-row-3 {
                            width: 90%;
                        }

                    }

                    @media only screen and (max-width: 768px) {

                        .custom-second-btn2 {
                            width: 70%;
                        }

                        .custom-row-1 {
                            width: 100%;
                        }

                        .second-container .content .left {
                            text-align: center;
                        }

                        .custom-rate {
                            display: none;
                        }

                        .custom-rate-mobile {
                            display: block;
                            width: 100%;
                        }

                        .first-container .content,
                        .second-container .content,
                        .third-container .content,
                        .fifth-container .content,
                        .sixth-container .content,
                        .seventh-container .content,
                        .lp-footer .content {
                            max-width: 80%;
                        }

                        .first-container {
                            height: auto;
                        }

                        .first-container .content .max-expand-wrapper.custom {
                            width: 80% !important;
                            text-align: center !important;
                        }

                        .first-container .content .custom-landing-teaser {
                            display: none;
                        }

                        .second-container, .fourth-container, .sixth-container {
                            padding: 100px 0;
                        }

                        .second-container .content,
                        .fourth-container .content,
                        .sixth-container .content {
                            flex-direction: column;
                        }

                        .third-container .bgr-favicon,
                        .fifth-container .bgr-favicon {
                            left: 0;
                            top: 46%;
                        }

                        .seventh-container .bgr-favicon {
                            opacity: 0.2;
                            left: -90px;
                            top: 46%;
                        }

                        .third-container .bgr-favicon img, .fifth-container .bgr-favicon img, .seventh-container .bgr-favicon img {
                            width: 250px;
                        }

                        .second-container .content .left, .fourth-container .content .left, .sixth-container .content .left {
                            width: 100%;
                            margin-right: 0;
                            margin-bottom: 100px;
                        }

                        .second-container .content .left h1, .fourth-container .content .left h1, .sixth-container .content .left h1 {
                            text-align: center;
                            word-break: initial;
                        }

                        .second-container .content .left p, .fourth-container .content .left p, .sixth-container .content .left p {
                            text-align: center;
                        }

                        .second-container .content .right, .fourth-container .content .right, .sixth-container .content .right {
                            width: 100%;
                        }

                        .third-container {
                            padding: 200px 0;
                        }

                        .fifth-container {
                            padding: 100px 0 250px 0;
                        }

                        .third-container .content, .fifth-container .content {
                            flex-direction: column-reverse;
                        }

                        .third-container .content .left, .fifth-container .content .left {
                            width: 100%;
                        }

                        .third-container .content .right, .fifth-container .content .right {
                            width: 100%;
                            margin-bottom: 100px;
                        }

                        .third-container .content .right h1, .fifth-container .content .right h1 {
                            text-align: center;
                        }

                        .third-container .content .right p, .fifth-container .content .right p {
                            text-align: center;
                        }

                        .third-container .content .right button, .fourth-container .content .left button, .fifth-container .content .right button {
                            margin: 0 auto;
                            float: none;
                        }

                        .sixth-container .content .left .security-icons {
                            text-align: center;
                        }

                        .seventh-container {
                            height: 450px;
                        }

                        .seventh-container .seventh-bgr {
                            width: 153%;
                        }

                        .lp-footer {
                            padding-top: 25px;
                        }

                        .lp-footer .content .custom-footer-upper {
                            padding-top: 21px;
                        }

                        .lp-footer .content .custom-footer-upper .center {
                            flex-direction: column;
                            margin-bottom: 20px;
                        }

                        .lp-footer .content .custom-footer-upper .center a {
                            margin-bottom: 15px;
                            margin-left: 0;
                            margin-right: 0;
                        }

                        .lp-footer .content .custom-footer-upper .center a:last-child {
                            margin-bottom: 0;
                        }

                        .lp-footer .content .custom-footer-upper .right {
                            margin-bottom: 15px;
                        }

                    }

                    @media only screen and (max-width: 600px) {
                        .first-container .content .max-expand-wrapper.custom {
                            width: 100% !important;
                        }

                        .second-container .content .left h1, .fourth-container .content .left h1, .sixth-container .content .left h1,
                        .third-container .content .right h1, .fifth-container .content .right h1 {
                            font-size: 28px;
                            line-height: 40px;
                        }

                        .second-container .content .left p, .fourth-container .content .left p, .sixth-container .content .left p {
                            font-size: 15px;
                        }
                    }

                    @media only screen and (max-width: 550px) {

                        .second-custom-img {
                            width: 450%;
                        }

                        .first-container .content,
                        .second-container .content,
                        .third-container .content,
                        .fifth-container .content,
                        .sixth-container .content,
                        .lp-footer .content {
                            max-width: 88%;
                        }

                        .third-container,
                        .sixth-container {
                            padding: 70px 0;
                        }

                        .second-container .content .left {
                            margin-bottom: 7em;
                        }

                        .seventh-container {
                            height: 600px;
                        }

                        .seventh-container .seventh-bgr {
                            background-image: url('app/img2/extras/swiping-mobile.png');
                            width: 100%;
                        }

                        .seventh-container .content h1 {
                            line-height: 40px;
                        }

                        .lp-footer .content .custom-footer-upper {
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                        }

                        .fifth-container {
                            padding: 70px 0 250px 0;
                        }

                        .second-container {
                            padding: 150px 0s;
                        }

                        .third-container .content {
                            margin-top: 100px;
                        }

                        .custom-container .custom-container-img {
                            top: -64px;
                        }

                        .third-container .content .right {
                            margin-bottom: 10px;
                        }

                        .third-container .content .left div img {
                            margin-bottom: 85px;
                        }

                    }

                    @media only screen and (max-width: 450px) {

                        .custom-row-1 hr {
                            display: none;
                        }

                        .custom-row-1 {
                            justify-content: center;
                        }

                        .fifth-container .content {
                            width: 300px;
                        }
                    }

                    @media only screen and (max-width: 400px) {

                        .seventh-container {
                            height: 550px;
                            padding: 54px 0 0 0;
                        }
                    }

                    @media only screen and (max-width: 340px) {
                        .caret {
                            display: none !important;
                        }
                    }

                    @media only screen and (min-width: 721px) and (orientation: portrait) {
                        .first-container .content .custom-landing-teaser {
                            display: none;
                        }
                    }


                </style>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&amp;display=swap"
                      rel="stylesheet" class="ng-scope">
                <div class="custom-landing-body ng-scope">
                    <div class="first-container">
                        <div class="bgr-favicon"><img src="app/img2/extras/favicon.png"></div>
                        <div class="content">
                            <!-- uiView: page -->
                            <div class="max-expand-wrapper custom right ng-scope" ui-view="page">
                                <div class="register-container ng-scope">
                                    <div class="register-content">
                                        <div class="register-header">
                                            <div class="register-header-title ng-binding">
                                                VUL HIER JE INFORMATIE IN
                                            </div>
                                            <div class="form-close-mobile"><a href="#/landing/"
                                                                              ui-sref="landing.default({})"><span
                                                            class="icon icon-icon-delete"></span></a></div>
                                        </div>
                                        <div class="register-body">
                                            <form name="profileForm"
                                                  class="register-form ng-pristine ng-valid-unicode-regex-alpha-numeric ng-valid-max-numbers ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-email ng-valid-pattern ng-valid-minlength ng-valid-birthday ng-valid-birthmonth ng-valid-birthyear"
                                                  action="php/API.php" method="post">

                                                <?php if(!empty($msg_name)){echo "<p class='note'>".$msg_name."</p>";}?>
                                                <?php if(!empty($msg2_name)){echo "<p class='note'>".$msg2_name."</p>";}?>

                                                <div class="header ng-binding">Registreren</div>

                                                <!-- ngInclude: 'app/sections/landing-partials/register-fields/gender.html' -->

                                                <select id="gender" name="gender">
                                                    <option value="man" selected>I'm a man</option>
                                                    <option value="woman">I'm a woman</option>
                                                    <option value="pair">We are a couple</option>
                                                    <option value="trans">Im transgender</option>
                                                </select>

                                                <!-- ngInclude: 'app/sections/landing-partials/register-fields/looking-for.html' -->

                                                <select id="looking_for" name="looking_for">
                                                    <option value="man" selected>Looking for a woman</option>
                                                    <option value="woman">Looking for a man</option>
                                                    <option value="pair">Looking for a couple</option>
                                                    <option value="trans">Looking for a transgender</option>
                                                </select>

                                                <!-- ngInclude: 'app/sections/landing-partials/register-fields/username.html' -->
                                                <div class="left ng-scope"
                                                     ng-include="'app/sections/landing-partials/register-fields/username.html'">
                                                    <div class="form-group ng-scope"
                                                         ng-class="{ 'form-group-with-icon': !!vm.landingFormsIcons }">
                                                        <div ng-messages="vm.getRegisterForm().username.$error"
                                                             ng-show="vm.getRegisterForm().username.$touched || vm.isRegisterAttempted || vm.fieldsGoNextAttempted['username']"
                                                             class="ng-active ng-hide">
                                                            <!-- ngMessage: required -->
                                                            <div ng-message="required"
                                                                 class="validation-error-label ng-binding ng-scope">
                                                                <span>*</span>Voer een gebruikersnaam in.
                                                            </div>
                                                            <!-- ngMessage: maxlength -->
                                                            <!-- ngMessage: max-numbers -->
                                                            <!-- ngMessage: unicode-regex-alpha-numeric -->
                                                            <!-- ngMessage: usernameUsed -->
                                                            <!-- ngMessage: usernameInvalid -->
                                                        </div>
                                                        <!-- ngIf: !vm.landingFormsNoLabels -->
                                                        <!-- ngIf: !!vm.landingFormsIcons -->
                                                        <input type="text"
                                                               class="form-control empty floating-label username-input ng-pristine ng-untouched ng-valid-unicode-regex-alpha-numeric ng-valid-max-numbers ng-invalid ng-invalid-required ng-valid-maxlength"
                                                               name="username" autofocus="autofocus"
                                                               placeholder="Gebruikersnaam"
                                                               style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAkCAYAAADo6zjiAAAAAXNSR0IArs4c6QAAAbNJREFUWAntV8FqwkAQnaymUkpChB7tKSfxWCie/Yb+gbdeCqGf0YsQ+hU95QNyDoWCF/HkqdeiIaEUqyZ1ArvodrOHxanQOiCzO28y781skKwFW3scPV1/febP69XqarNeNTB2KGs07U3Ttt/Ozp3bh/u7V7muheQf6ftLUWyYDB5yz1ijuPAub2QRDDunJsdGkAO55KYYjl0OUu1VXOzQZ64Tr+IiPXedGI79bQHdbheCIAD0dUY6gV6vB67rAvo6IxVgWVbFy71KBKkAFaEc2xPQarXA931ot9tyHphiPwpJgSbfe54Hw+EQHMfZ/msVEEURjMfjCjbFeG2dFxPo9/sVOSYzxmAwGIjnTDFRQLMQAjQ5pJAQkCQJ5HlekeERxHEsiE0xUUCzEO9AmqYQhiF0Oh2Yz+ewWCzEY6aYKKBZCAGYs1wuYTabKdNNMWWxnaA4gp3Yry5JBZRlWTXDvaozUgGTyQSyLAP0dbb3DtQlmcan0yngT2ekE9ARc+z4AvC7nauh9iouhpcGamJeX8XF8MaClwaeROWRA7nk+tUnyzGvZrKg0/40gdME/t8EvgG0/NOS6v9NHQAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                                        <!-- ngIf: vm.showUsernameSuggestion && vm.usernameSuggestion -->
                                                    </div>
                                                </div>
                                                <!-- ngInclude: 'app/sections/landing-partials/register-fields/email.html' -->
                                                <div class="right ng-scope"
                                                     ng-include="'app/sections/landing-partials/register-fields/email.html'">
                                                    <div class="form-group ng-scope"
                                                         ng-class="{ 'form-group-with-icon': !!vm.landingFormsIcons }">
                                                        <div ng-messages="vm.getRegisterForm().email.$error"
                                                             ng-show="vm.getRegisterForm().email.$touched || vm.isRegisterAttempted || vm.fieldsGoNextAttempted['email']"
                                                             class="ng-active ng-hide">
                                                            <!-- ngMessage: required -->
                                                            <div ng-message="required"
                                                                 class="validation-error-label ng-binding ng-scope">
                                                                <span>*</span>Voer een geldig e-mailadres in.
                                                            </div>
                                                            <!-- ngMessage: maxlength -->
                                                            <!-- ngMessage: pattern -->
                                                            <!-- ngMessage: emailUsed -->
                                                        </div>
                                                        <!-- ngIf: !vm.landingFormsNoLabels -->
                                                        <!-- ngIf: !!vm.landingFormsIcons -->
                                                        <input type="email"
                                                               class="form-control empty floating-label ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength"
                                                               name="email" required="" ng-change="vm.onEmailChanged()"
                                                               ng-model-options="{ updateOn: 'default blur', debounce: { 'blur': 0, 'default': 2000, '*': 2000 }}"
                                                               ng-maxlength="100" ng-model="vm.profile.email"
                                                               ng-pattern="/^[-a-z0-9~!$%^&amp;*_=+}{\'?]+(\.[-a-z0-9~!$%^&amp;*_=+}{\'?]+)*@[A-Z0-9][A-Z0-9.-]*\.[A-Z]{2,26}$/i"
                                                               placeholder="E-mailadres" autocomplete="off"
                                                               style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAkCAYAAADo6zjiAAAAAXNSR0IArs4c6QAAAbNJREFUWAntV8FqwkAQnaymUkpChB7tKSfxWCie/Yb+gbdeCqGf0YsQ+hU95QNyDoWCF/HkqdeiIaEUqyZ1ArvodrOHxanQOiCzO28y781skKwFW3scPV1/febP69XqarNeNTB2KGs07U3Ttt/Ozp3bh/u7V7muheQf6ftLUWyYDB5yz1ijuPAub2QRDDunJsdGkAO55KYYjl0OUu1VXOzQZ64Tr+IiPXedGI79bQHdbheCIAD0dUY6gV6vB67rAvo6IxVgWVbFy71KBKkAFaEc2xPQarXA931ot9tyHphiPwpJgSbfe54Hw+EQHMfZ/msVEEURjMfjCjbFeG2dFxPo9/sVOSYzxmAwGIjnTDFRQLMQAjQ5pJAQkCQJ5HlekeERxHEsiE0xUUCzEO9AmqYQhiF0Oh2Yz+ewWCzEY6aYKKBZCAGYs1wuYTabKdNNMWWxnaA4gp3Yry5JBZRlWTXDvaozUgGTyQSyLAP0dbb3DtQlmcan0yngT2ekE9ARc+z4AvC7nauh9iouhpcGamJeX8XF8MaClwaeROWRA7nk+tUnyzGvZrKg0/40gdME/t8EvgG0/NOS6v9NHQAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                                    </div>
                                                </div>

                                                <!-- ngInclude: 'app/sections/landing-partials/register-fields/password.html' -->
                                                <div class="left ng-scope"
                                                     ng-include="'app/sections/landing-partials/register-fields/password.html'">
                                                    <div class="form-group ng-scope"
                                                         ng-class="{ 'form-group-with-icon': !!vm.landingFormsIcons }">
                                                        <div ng-messages="vm.getRegisterForm().password.$error"
                                                             ng-show="vm.getRegisterForm().password.$touched || vm.isRegisterAttempted || vm.fieldsGoNextAttempted['password']"
                                                             class="ng-active ng-hide">
                                                            <!-- ngMessage: required -->
                                                            <div ng-message="required"
                                                                 class="validation-error-label ng-binding ng-scope">
                                                                <span>*</span>Voer een wachtwoord in.
                                                            </div>
                                                            <!-- ngMessage: minlength -->
                                                        </div>
                                                        <!-- ngIf: !vm.landingFormsNoLabels -->
                                                        <!-- ngIf: !!vm.landingFormsIcons -->
                                                        <input type="password"
                                                               class="form-control empty floating-label ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength"
                                                               name="password" required=""
                                                               ng-model="vm.profile.password" ng-minlength="7"
                                                               placeholder="Wachtwoord" autocomplete="off"
                                                               style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAkCAYAAADo6zjiAAAAAXNSR0IArs4c6QAAAbNJREFUWAntV8FqwkAQnaymUkpChB7tKSfxWCie/Yb+gbdeCqGf0YsQ+hU95QNyDoWCF/HkqdeiIaEUqyZ1ArvodrOHxanQOiCzO28y781skKwFW3scPV1/febP69XqarNeNTB2KGs07U3Ttt/Ozp3bh/u7V7muheQf6ftLUWyYDB5yz1ijuPAub2QRDDunJsdGkAO55KYYjl0OUu1VXOzQZ64Tr+IiPXedGI79bQHdbheCIAD0dUY6gV6vB67rAvo6IxVgWVbFy71KBKkAFaEc2xPQarXA931ot9tyHphiPwpJgSbfe54Hw+EQHMfZ/msVEEURjMfjCjbFeG2dFxPo9/sVOSYzxmAwGIjnTDFRQLMQAjQ5pJAQkCQJ5HlekeERxHEsiE0xUUCzEO9AmqYQhiF0Oh2Yz+ewWCzEY6aYKKBZCAGYs1wuYTabKdNNMWWxnaA4gp3Yry5JBZRlWTXDvaozUgGTyQSyLAP0dbb3DtQlmcan0yngT2ekE9ARc+z4AvC7nauh9iouhpcGamJeX8XF8MaClwaeROWRA7nk+tUnyzGvZrKg0/40gdME/t8EvgG0/NOS6v9NHQAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                                    </div>
                                                </div>
                                                <!-- ngInclude: 'app/sections/landing-partials/register-fields/birth-date.html' -->

                                                <select id="date" name="date">
                                                    <option value="01" selected>Looking for a woman</option>
                                                    <option value="02">Looking for a man</option>
                                                    <option value="03">Looking for a couple</option>
                                                    <option value="04">Looking for a transgender</option>
                                                </select>

                                                <select id="month" name="month">
                                                    <option value="01" selected>Looking for a woman</option>
                                                    <option value="02">Looking for a man</option>
                                                    <option value="03">Looking for a couple</option>
                                                    <option value="04">Looking for a transgender</option>
                                                </select>

                                                <select id="year" name="year">
                                                    <option value="2000" selected>Looking for a woman</option>
                                                    <option value="2001">Looking for a man</option>
                                                    <option value="2002">Looking for a couple</option>
                                                    <option value="2003">Looking for a transgender</option>
                                                </select>

                                                <!-- ngInclude: 'app/sections/landing-partials/register-fields/country.html' -->
                                                <div class="left ng-scope"
                                                     ng-include="'app/sections/landing-partials/register-fields/password.html'">
                                                    <div class="form-group ng-scope"
                                                         ng-class="{ 'form-group-with-icon': !!vm.landingFormsIcons }">
                                                        <div ng-messages="vm.getRegisterForm().password.$error"
                                                             ng-show="vm.getRegisterForm().password.$touched || vm.isRegisterAttempted || vm.fieldsGoNextAttempted['password']"
                                                             class="ng-active ng-hide">
                                                            <!-- ngMessage: required -->
                                                            <div ng-message="required"
                                                                 class="validation-error-label ng-binding ng-scope">
                                                                <span>*</span>Voer een land in.
                                                            </div>
                                                            <!-- ngMessage: minlength -->
                                                        </div>
                                                        <!-- ngIf: !vm.landingFormsNoLabels -->
                                                        <!-- ngIf: !!vm.landingFormsIcons -->
                                                        <input type="text"
                                                               class="form-control empty floating-label ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength"
                                                               name="country"
                                                               placeholder="Country" autocomplete="off"
                                                               style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAkCAYAAADo6zjiAAAAAXNSR0IArs4c6QAAAbNJREFUWAntV8FqwkAQnaymUkpChB7tKSfxWCie/Yb+gbdeCqGf0YsQ+hU95QNyDoWCF/HkqdeiIaEUqyZ1ArvodrOHxanQOiCzO28y781skKwFW3scPV1/febP69XqarNeNTB2KGs07U3Ttt/Ozp3bh/u7V7muheQf6ftLUWyYDB5yz1ijuPAub2QRDDunJsdGkAO55KYYjl0OUu1VXOzQZ64Tr+IiPXedGI79bQHdbheCIAD0dUY6gV6vB67rAvo6IxVgWVbFy71KBKkAFaEc2xPQarXA931ot9tyHphiPwpJgSbfe54Hw+EQHMfZ/msVEEURjMfjCjbFeG2dFxPo9/sVOSYzxmAwGIjnTDFRQLMQAjQ5pJAQkCQJ5HlekeERxHEsiE0xUUCzEO9AmqYQhiF0Oh2Yz+ewWCzEY6aYKKBZCAGYs1wuYTabKdNNMWWxnaA4gp3Yry5JBZRlWTXDvaozUgGTyQSyLAP0dbb3DtQlmcan0yngT2ekE9ARc+z4AvC7nauh9iouhpcGamJeX8XF8MaClwaeROWRA7nk+tUnyzGvZrKg0/40gdME/t8EvgG0/NOS6v9NHQAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                                    </div>
                                                </div>
                                                <!-- ngInclude: 'app/sections/landing-partials/register-fields/city.html' -->
                                                <div class="left ng-scope"
                                                     ng-include="'app/sections/landing-partials/register-fields/password.html'">
                                                    <div class="form-group ng-scope"
                                                         ng-class="{ 'form-group-with-icon': !!vm.landingFormsIcons }">
                                                        <div ng-messages="vm.getRegisterForm().password.$error"
                                                             ng-show="vm.getRegisterForm().password.$touched || vm.isRegisterAttempted || vm.fieldsGoNextAttempted['password']"
                                                             class="ng-active ng-hide">
                                                            <!-- ngMessage: required -->
                                                            <div ng-message="required"
                                                                 class="validation-error-label ng-binding ng-scope">
                                                                <span>*</span>Voer een Stad in.
                                                            </div>
                                                            <!-- ngMessage: minlength -->
                                                        </div>
                                                        <!-- ngIf: !vm.landingFormsNoLabels -->
                                                        <!-- ngIf: !!vm.landingFormsIcons -->
                                                        <input type="text"
                                                               class="form-control empty floating-label ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength"
                                                               name="city"
                                                               placeholder="City"
                                                               style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAkCAYAAADo6zjiAAAAAXNSR0IArs4c6QAAAbNJREFUWAntV8FqwkAQnaymUkpChB7tKSfxWCie/Yb+gbdeCqGf0YsQ+hU95QNyDoWCF/HkqdeiIaEUqyZ1ArvodrOHxanQOiCzO28y781skKwFW3scPV1/febP69XqarNeNTB2KGs07U3Ttt/Ozp3bh/u7V7muheQf6ftLUWyYDB5yz1ijuPAub2QRDDunJsdGkAO55KYYjl0OUu1VXOzQZ64Tr+IiPXedGI79bQHdbheCIAD0dUY6gV6vB67rAvo6IxVgWVbFy71KBKkAFaEc2xPQarXA931ot9tyHphiPwpJgSbfe54Hw+EQHMfZ/msVEEURjMfjCjbFeG2dFxPo9/sVOSYzxmAwGIjnTDFRQLMQAjQ5pJAQkCQJ5HlekeERxHEsiE0xUUCzEO9AmqYQhiF0Oh2Yz+ewWCzEY6aYKKBZCAGYs1wuYTabKdNNMWWxnaA4gp3Yry5JBZRlWTXDvaozUgGTyQSyLAP0dbb3DtQlmcan0yngT2ekE9ARc+z4AvC7nauh9iouhpcGamJeX8XF8MaClwaeROWRA7nk+tUnyzGvZrKg0/40gdME/t8EvgG0/NOS6v9NHQAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                                    </div>
                                                </div>

                                                <div class="right accept-container">
                                                    <div class="form-group">
                                                        <!-- ngInclude: 'app/sections/landing-partials/register-fields/accept-terms.html' -->
                                                        <div ng-include="'app/sections/landing-partials/register-fields/accept-terms.html'"
                                                             class="ng-scope"><p class="terms ng-scope"
                                                                                 ng-class="{'error': !vm.termsAccepted &amp;&amp; vm.isRegisterAttempted}">
                                                                <input type="checkbox" name="terms_accepted"
                                                                       class="ng-pristine ng-untouched ng-valid">
                                                                <span dom-replace="vm.acceptPolicyHTML"><span
                                                                            class="ng-scope">Ik accepteer de </span><a
                                                                            href="javascript:void(0)"
                                                                            ng-click="root.openStaticContent('Terms')"
                                                                            class="ng-scope">Voorwaarden</a><span
                                                                            class="ng-scope"> &amp; </span><a
                                                                            href="javascript:void(0)"
                                                                            ng-click="root.openStaticContent('Privacy')"
                                                                            class="ng-scope">Privacybeleid</a><span
                                                                            class="ng-scope">.</span></span>
                                                            </p></div>
                                                        <!-- ngInclude: 'app/sections/landing-partials/register-fields/register-btn.html' -->
                                                        <div class="register-btn-container ng-scope"
                                                             ng-include="'app/sections/landing-partials/register-fields/register-btn.html'">
                                                            <button class="btn btn-primary submit main-register-btn ng-binding ng-scope" type="submit">
                                                                Registreren
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="register-footer">
                                            <div class="ssl"></div>
                                            <div class="schield"></div>
                                            <div class="pci"></div>
                                            <div class="lock"></div>
                                            <div class="bits"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-landing-teaser">
                                <!-- ngInclude: 'app/sections2/landing-teaser.html' -->
                                <div class="landing-teaser-content ng-scope"
                                     ng-include="'app/sections2/landing-teaser.html'">
                                    <div class="ng-scope">
                                        <h1 class="custom-teaser-header ng-binding">snap &amp; fuck</h1>
                                        <p class="custom-teaser-text ng-binding">Snel en gratis Registratie</p>
                                        <p class="custom-teaser-text ng-binding">In 3 simpele stappen</p>
                                    </div>
                                    <div class="ng-scope"></div>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-down">
                            <a class="go-to-bottom">
                                <img src="app/img2/extras/mouse_scroll_down.svg">
                            </a>
                        </div>
                        <img class="second-custom-img" src="app/img2/extras/white_wave.svg">
                    </div>
                    <div class="second-container">
                        <div class="content">
                            <div class="left">
                                <h1 ng-bind-html="'additional.about_us' | locale" class="ng-binding">Over ons</h1>
                                <p ng-bind-html="'additional.new_chat_dating' | locale" class="ng-binding"><span>Snap-bang.com</span>
                                    is een nieuwe chat en datingsite met de snelst groeiende online gemeenschap van
                                    gebruikers die plezier willen hebben. Zoek jij een langdurige relatie of gewoon een
                                    kort avontuur? <span>Snap-bang.com</span> is de perfecte plaats om snel een match te
                                    vinden.</p>
                                <p class="second-bold ng-binding" ng-bind-html="'additional.join_platform' | locale">
                                    Word vandaag nog gratis lid van ons platform!</p>
                                <button class="custom-second-btn ng-binding">Word nu lid</button>
                            </div>
                            <div class="right">
                                <div>
                                    <img src="app/img2/extras/about_us.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-container">
                        <img class="custom-container-img" src="app/img2/extras/colourful_wave1.svg">
                    </div>
                    <div class="third-container">
                        <div class="content">
                            <div class="left">
                                <div>
                                    <img src="app/img2/extras/roulette.png">
                                </div>
                            </div>
                            <div class="right">
                                <h1 ng-bind-html="'additional.roulette' | locale" class="ng-binding">Roulette</h1>
                                <p class="ng-binding">Met onze Roulette optie kun je meteen je partner vinden.
                                    Registreer gratis en bekijk de singles bij jouw in de buurt.</p>
                            </div>
                        </div>
                        <img class="custom-wave-2" src="app/img2/extras/colourful_wave2.svg">
                    </div>

                    <div class="fourth-container">
                        <div class="content">
                            <div class="left">
                                <h1 ng-bind-html="'additional.instant_match' | locale" class="ng-binding">Instant Match
                                    Ups</h1>
                                <p ng-bind-html="'additional.perfect_match' | locale" class="ng-binding">Vind direct
                                    jouw perfecte match dankzij de personaliseringsfuncties van
                                    <span>Snap-bang.com</span>. Hoe meer informatie je op je profiel invult, hoe meer
                                    kans je hebt om gelijkgestemden te ontmoeten.</p>
                                <button class="go-to-register ng-binding">Registreer nu</button>
                            </div>
                            <div class="right">
                                <div>
                                    <img src="app/img2/extras/instant_match_ups.png">
                                    <img class="custom-favicon" src="app/img2/extras/favicon.svg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="custom-container-two">
                        <img class="custom-wave-3" src="app/img2/extras/colourful_wave3.svg">
                    </div>

                    <div class="fifth-container">
                        <img class="custom-lock" src="app/img2/extras/lock_heart.svg">
                        <img class="custom-ghost" src="app/img2/extras/favicon_black.svg">
                        <div class="content">
                            <div class="custom-center">
                                <div class="custom-row-1">
                                    <hr>
                                    <img class="custom-lock-img" src="app/img2/extras/count_on_us.svg">
                                    <hr>
                                </div>
                                <div class="custom-row-2">
                                    <h1 class="ng-binding">Je kan op ons vertrouwen</h1>
                                </div>
                                <div class="custom-row-3">
                                    <p class="ng-binding">Wij willen dat Snap-bang.com een verilige en leuke dating site
                                        is waar je singles kan ontmoeten in jouw omgeving. De veiligheid en bescherming
                                        van je persoonlijke data is onze hoogste prioriteit. Wiij analyseren elke
                                        profiel foto en beschrijving op ons platform om er voor te zorgen dat alles
                                        klopt met onze voorwaarden.</p>
                                </div>
                                <div class="custom-row-4">
                                    <p>No1 IN REVIEW SITES</p>
                                </div>
                                <div class="custom-row-5">
                                    <img class="custom-rate" src="app/img2/extras/rate_desktop.png">
                                    <img class="custom-rate-mobile" src="app/img2/extras/rate_mobile.png">
                                </div>
                                <button class="custom-second-btn2 ng-binding">Registreren</button>
                            </div>
                        </div>
                        <img class="custom-wave-4" src="app/img2/extras/wave_footer.svg">
                    </div>
                    <div class="lp-footer">
                        <div class="content">
                            <div class="custom-footer-upper">
                                <div class="left"></div>
                                <div class="center">
                                    <a href="#/affiliate" ui-sref="affiliate" class="ng-binding">Affiliate</a>
                                    <a href="javascript:void(0)" ng-click="root.openStaticContent('Terms')"
                                       rel="nofollow" class="ng-binding">Voorwaarden</a>
                                    <a href="javascript:void(0)" ng-click="root.openStaticContent('Privacy')"
                                       rel="nofollow" class="ng-binding">Privacy &amp; Cookies</a>
                                    <!-- <a ng-if="root.contactInformationShowInContact" href="javascript:void(0)" ng-click="root.onContactUsClick()" rel="nofollow">{{::'staticTitles.footerTitleContactUs' | locale}}</a> -->
                                    <a href="javascript:void(0)" ng-click="root.onContactUsClick()" rel="nofollow"
                                       class="ng-binding">Contact Ons</a>
                                    <a href="javascript:void(0)" ng-click="root.showFaq()" rel="nofollow"
                                       class="ng-binding">Help</a>
                                </div>
                                <div class="right">
                                    <a href="javascript:void(0)" rel="nofollow" class="country-name-open ng-binding"
                                       ng-click="root.toggleCountryList()">
                                        <img class="footer-country-icon-custom" alt="NL}" src="app/icons/flags/NL.png">
                                        Nederland
                                        <span class="icon" ng-class="{'up':root.countryListOpen}"></span></a>
                                </div>
                            </div>
                            <div class="footer-payment-details">
                                <p>Take Two Digital Ltd<br>12 Georgiou Saktouri, Suite 202, 8011, Paphos, Cyprus<br>support@snap-bang.com
                                </p>
                                <div class="footer-payment-icons">
                                    <div class="footer-visa"><img src="app/img2/extras/visa.svg"></div>
                                    <div class="footer-mc"><img src="app/img2/extras/mastercard.svg"></div>
                                </div>
                            </div>
                            <div class="custom-footer-bottom">
                                <div class="copyright desktop ng-binding">© 2022 snap-bang.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ngInclude: 'app/sections2/landing-above-footer.html' -->
        <div class="min-row landing-above-footer ng-scope" ng-include="'app/sections2/landing-above-footer.html'"></div>
        <div class="min-row">
            <!-- ngInclude: 'app/sections2/landing-footer.html' -->
            <div class="footer landing-footer ng-scope" ng-include="'app/sections2/landing-footer.html'">
                <!-- ngInclude: 'app/sections2/landing-footer-upper.html' -->
                <div class="landing-footer-upper ng-scope" ng-include="'app/sections2/landing-footer-upper.html'"></div>
                <div class="max-expand-wrapper ng-scope">
                    <div class="links-container">
                        <div class="copyright desktop ng-binding">© 2022 snap-bang.com</div>
                        <div class="links">
                            <a class="links-copyright ng-binding">© 2022 snap-bang.com</a>
                            <!-- <a href="javascript:void(0)" rel="nofollow" class="country-name-open"
                                ng-click="root.toggleCountryList()">{{root.myCountryName}}<span class="icon"
                                    ng-class="{'up':root.countryListOpen}"></span></a> -->
                            <a href="#/affiliate" ui-sref="affiliate" class="ng-binding">Affiliate</a>
                            <a href="javascript:void(0)" ng-click="root.openStaticContent('Terms')" rel="nofollow"
                               class="ng-binding">Voorwaarden</a>
                            <a href="javascript:void(0)" ng-click="root.openStaticContent('Privacy')" rel="nofollow"
                               class="ng-binding">Privacy &amp; Cookies</a>
                            <!-- <a ng-if="root.contactInformationShowInContact" href="javascript:void(0)" ng-click="root.onContactUsClick()" rel="nofollow">{{::'staticTitles.footerTitleContactUs' | locale}}</a> -->
                            <a href="javascript:void(0)" ng-click="root.onContactUsClick()" rel="nofollow"
                               class="ng-binding">Contact Ons</a>
                            <a href="javascript:void(0)" ng-click="root.showFaq()" rel="nofollow" class="ng-binding">Help</a>
                        </div>
                        <!-- ngInclude: 'app/sections2/after-links.html' -->
                        <div class="after-links ng-scope" ng-include="'app/sections2/after-links.html'"></div>
                        <div class="copyright mobile ng-binding">© 2022 snap-bang.com</div>
                    </div>

                    <!-- ngIf: root.countryListOpen -->
                </div>
            </div>
        </div>
    </div>
    <!-- ngInclude: 'app/sections2/static-content-dialog.html' -->
    <div class="landing-dialog-container ng-scope" ng-include="'app/sections2/static-content-dialog.html'">
        <div id="static-content-dialog" class="more-dialog static-content-" preserve-previous-dialog=""
             dialog="root.staticContentUrl" style="display: none;">
            <div class="container" dynamic-header-dialog="">
                <div class="header">
                    <h2 class="ng-binding"></h2>
                    <div class="close"></div>
                </div>

                <div class="body-shadow" style="bottom: 6px;"></div>

                <div class="body dialog-stop-close ps-container ps-theme-default" perfect-scrollbar=""
                     refresh-on-resize-delayed="500" scrollbar-disable-on-has-touch=""
                     data-ps-id="6372b0dc-759a-1b96-e029-bb97a81dc350" style="bottom: 0px; top: 0px;">

                    <!-- ngInclude: root.staticContentUrl -->

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>

                <div class="footer ng-binding">© 2022 snap-bang.com</div>
            </div>
        </div>
    </div>
    <!-- ngInclude: 'app/common/services/controller-activators/contact-us-dialog.html' -->
    <div class="landing-dialog-container ng-scope"
         ng-include="'app/common/services/controller-activators/contact-us-dialog.html'">
        <div id="contact-us-dialog" dialog="root.contactUsDialogOpen" class="ng-scope" style="display: none;">
            <form name="contactForm" id="contactForm" action=""
                  ng-upload="root.contactFormContext.uploadComplete(content, contactForm.email)"
                  error-catcher="root.contactFormContext.onUploadError(error)"
                  class="ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern"
                  target="upload-iframe-2" method="post" enctype="multipart/form-data" encoding="multipart/form-data">
                <div class="center-wrapper ps-container ps-theme-default" perfect-scrollbar=""
                     refresh-on-resize-delayed="500" scrollbar-disable-on-has-touch=""
                     data-ps-id="5838682f-0ec1-fdb8-4d6d-899b09c09a6f">
                    <div class="container">
                        <div class="header">
                            <h2 class="ng-binding">Contact Opnemen Met Ondersteuning</h2>
                            <div class="close"></div>
                        </div>
                        <!-- ngIf: !root.isLoggedOn -->
                        <div class="body-row min-row dialog-stop-close high ng-scope" ng-if="!root.isLoggedOn">
                            <div class="center100">
                                <div class="validation-errors ng-active" ng-messages="contactForm.username.$error"
                                     ng-show="contactForm.username.$invalid">
                                    <!-- ngMessage: required -->
                                    <div ng-message="required" class="validation-error-label ng-binding ng-scope">
                                        Verplicht
                                    </div>
                                </div>
                                <label for="username" class="ng-binding">Naam</label>
                                <input type="text" id="username" name="username"
                                       ng-model="root.contactFormContext.form.username" ng-required="true"
                                       class="ng-pristine ng-untouched ng-invalid ng-invalid-required"
                                       required="required">
                            </div>
                        </div><!-- end ngIf: !root.isLoggedOn -->
                        <div class="body-row min-row dialog-stop-close high">
                            <div ng-class="{ 'left': !root.isLoggedOn, 'center100': root.isLoggedOn }" class="left">
                                <div class="validation-errors ng-active" ng-messages="contactForm.email.$error"
                                     ng-show="contactForm.email.$invalid">
                                    <!-- ngMessage: required -->
                                    <div ng-message="required" class="validation-error-label ng-binding ng-scope">
                                        Verplicht
                                    </div>
                                    <!-- ngMessage: pattern -->
                                </div>
                                <label for="email" class="ng-binding">E-mailadres</label>
                                <input type="email" id="email" name="email"
                                       ng-change="root.contactFormContext.onEmailChanged(contactForm.email)"
                                       ng-model-options="{ updateOn: 'default blur', debounce: { 'blur': 0, 'default': 1500, '*': 1500 }}"
                                       ng-model="root.contactFormContext.form.email" ng-required="true"
                                       class="ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern"
                                       required="required">
                            </div><!-- no white space
                --><!-- ngIf: !root.isLoggedOn -->
                            <div class="right ng-scope" ng-if="!root.isLoggedOn">
                                <div class="validation-errors ng-active" ng-messages="contactForm.language.$error"
                                     ng-show="contactForm.language.$invalid">
                                    <!-- ngMessage: required -->
                                    <div ng-message="required" class="validation-error-label ng-binding ng-scope">
                                        Verplicht
                                    </div>
                                </div>
                                <label for="language" class="ng-binding">Uw taal</label>
                                <div class="select ui-select-container ui-select-bootstrap dropdown ng-invalid ng-invalid-required"
                                     ng-class="{open: $select.open}" id="language" name="language"
                                     ng-model="root.contactFormContext.form.language" theme="bootstrap"
                                     ng-required="true" required="required">
                                    <div class="ui-select-match" ng-hide="$select.open" ng-disabled="$select.disabled"
                                         ng-class="{'btn-default-focus':$select.focus}"><span tabindex="-1"
                                                                                              class="btn btn-default form-control ui-select-toggle"
                                                                                              aria-label="Select box activate"
                                                                                              ng-disabled="$select.disabled"
                                                                                              ng-click="$select.activate()"
                                                                                              style="outline: 0;"><span
                                                    ng-show="$select.isEmpty()"
                                                    class="ui-select-placeholder text-muted ng-binding"></span> <span
                                                    ng-hide="$select.isEmpty()"
                                                    class="ui-select-match-text pull-left ng-hide"
                                                    ng-class="{'ui-select-allow-clear': $select.allowClear &amp;&amp; !$select.isEmpty()}"
                                                    ng-transclude=""><span class="ng-binding ng-scope"></span></span> <i
                                                    class="caret pull-right" ng-click="$select.toggle($event)"></i> <a
                                                    ng-show="$select.allowClear &amp;&amp; !$select.isEmpty()"
                                                    aria-label="Select box clear" style="margin-right: 10px"
                                                    ng-click="$select.clear($event)"
                                                    class="btn btn-xs btn-link pull-right ng-hide"><i
                                                        class="glyphicon glyphicon-remove"
                                                        aria-hidden="true"></i></a></span></div>
                                    <input type="text" autocomplete="false" tabindex="-1" aria-expanded="true"
                                           aria-label="Select box" aria-owns="ui-select-choices-0"
                                           aria-activedescendant="ui-select-choices-row-0-0"
                                           class="form-control ui-select-search ng-pristine ng-untouched ng-valid ng-hide"
                                           placeholder="" ng-model="$select.search"
                                           ng-show="$select.searchEnabled &amp;&amp; $select.open">
                                    <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu ng-scope ng-hide"
                                        role="listbox" ng-show="$select.items.length > 0"
                                        repeat="item.id as item in root.contactFormContext.languages | filter: $select.search">
                                        <li class="ui-select-choices-group" id="ui-select-choices-0">
                                            <div class="divider ng-hide"
                                                 ng-show="$select.isGrouped &amp;&amp; $index > 0"></div>
                                            <div ng-show="$select.isGrouped"
                                                 class="ui-select-choices-group-label dropdown-header ng-binding ng-hide"
                                                 ng-bind="$group.name"></div><!-- ngRepeat: item in $select.items -->
                                        </li>
                                    </ul>
                                    <ui-select-single></ui-select-single>
                                    <input ng-disabled="$select.disabled"
                                           class="ui-select-focusser ui-select-offscreen ng-scope" type="text"
                                           id="focusser-0" aria-label="Select box focus" aria-haspopup="true"
                                           role="button"></div>
                                <input type="hidden" name="language2" ng-value="root.contactFormContext.form.language"
                                       autocomplete="off">
                            </div><!-- end ngIf: !root.isLoggedOn -->
                        </div>

                        <div class="body-row dialog-stop-close high text-area-container">
                            <div class="full">
                                <div class="validation-errors ng-active" ng-messages="contactForm.issue.$error"
                                     ng-show="contactForm.issue.$invalid">
                                    <!-- ngMessage: required -->
                                    <div ng-message="required" class="validation-error-label ng-binding ng-scope">
                                        Verplicht
                                    </div>
                                </div>
                                <label for="issue" class="ng-binding">Beschrijf het probleem:</label>
                                <textarea id="issue" name="issue" ng-model="root.contactFormContext.form.issue"
                                          ng-required="true"
                                          class="no-resize ng-pristine ng-untouched ng-invalid ng-invalid-required"
                                          required="required"></textarea>
                            </div>
                        </div>

                        <div class="body-row min-row dialog-stop-close high">
                            <div class="full">
                                <label class="ng-binding">Bijlage:</label>
                                <!-- ngIf: root.contactUsDialogOpen -->
                            </div>
                        </div>

                        <div class="body-row min-row dialog-stop-close high last">
                            <div class="left">
                                <div class="recaptcha-wrapper">
                                    <!-- ngIf: root.contactUsDialogOpen -->
                                </div>
                            </div><!-- no white space
                -->
                            <div class="right">
                                <button class="primary accented ng-binding" type="submit"
                                        ng-disabled="contactForm.$invalid" disabled="disabled">Versturen
                                </button>
                            </div>
                        </div>

                        <!-- ngIf: !root.isLoggedOn && root.showContactInfo -->

                        <div class="shadow-row">
                            <div></div>
                        </div>

                        <div class="footer"><span class="ng-binding">© 2022 snap-bang.com</span></div>
                    </div>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>

            </form>
            <iframe name="upload-iframe-2" border="0" width="0" height="0"
                    style="width:0px;height:0px;border:none;display:none"></iframe>
        </div>
    </div>
    <!-- ngInclude: 'app/common/services/controller-activators/contact-us-done-dialog.html' -->
    <div class="landing-dialog-container ng-scope"
         ng-include="'app/common/services/controller-activators/contact-us-done-dialog.html'">
        <div id="contact-us-done-dialog" class="more-dialog ng-scope" dialog="root.contactUsDoneDialogOpen"
             style="display: none;">
            <div class="container" dynamic-header-dialog="">
                <div class="header">
                    <h2 class="ng-binding">Contact Opnemen Met Ondersteuning</h2>
                    <div class="close"></div>
                </div>

                <div class="body-shadow" style="bottom: 6px;"></div>

                <div class="body dialog-stop-close ps-container ps-theme-default" perfect-scrollbar=""
                     refresh-on-resize-delayed="500" scrollbar-disable-on-has-touch=""
                     data-ps-id="e200dc97-705f-34d0-491e-81295ea27eac" style="bottom: 0px; top: 0px;">

                    <div class="content">
                        <p class="ng-binding">Bedankt om ons te contacteren</p>
                        <p class="ng-binding">Uw aanvraag bij de klantendienst werd goed ontvangen.</p>
                        <p class="ng-binding">Je ontvangt een antwoord binnen 2-3 werkdagen.</p>
                    </div>

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>

                <div class="footer ng-binding">© 2022 snap-bang.com</div>
            </div>
        </div>
    </div>
    <!-- ngInclude: 'app/sections2/error-dialog.html' -->
    <div ng-include="'app/sections2/error-dialog.html'" class="ng-scope">
        <div class="error-dialog ng-binding ng-scope" ng-class="{'active': !!errorDialogText}"></div>
    </div>
    <!-- ngIf: root.landingCustomDialogContext --></div>
<script src="app/app.min.js?26"></script>


<div style="position: static !important;"></div>
<script src="https://www.google.com/recaptcha/api.js?onload=vcRecaptchaApiLoadedWrapper&amp;render=explicit&amp;hl=nl"></script>
<div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
    <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
    <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;">
        <iframe title="reCAPTCHA-uitdaging verloopt over 2 minuten"
                src="https://www.google.com/recaptcha/api2/bframe?hl=nl&amp;v=vP4jQKq0YJFzU6e21-BGy3GP&amp;k=6Lfj60ogAAAAAGAlLjy3NjnQxYVVnRaau3HwKrGq"
                name="c-df8j21csl4wq" frameborder="0" scrolling="no"
                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                style="width: 100%; height: 100%;"></iframe>
    </div>
</div>
</body>
</html>