<html lang="en" class="no-touch">
<script>
    document.addEventListener('contextmenu', (e) => e.preventDefault());

    function ctrlShiftKey(e, keyCode) {
        return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
    }

    document.onkeydown = (e) => {
        // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
        if (
            event.keyCode === 123 ||
            ctrlShiftKey(e, 'I') ||
            ctrlShiftKey(e, 'J') ||
            ctrlShiftKey(e, 'C') ||
            (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
        )
            return false;
    };
    function getCurrentURL () {
        return window.location.href
    }

    const url = getCurrentURL()

    var r = /:\/\/(.[^/]+)/;
    $domain = url.match(r)[1]
</script>
<?php
function getIPAddress() {
    //whether ip is from the share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
//whether ip is from the remote address
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$IP = getIPAddress();
$query = @unserialize(file_get_contents('http://ip-api.com/php/' . $IP));
if ($query && $query['status'] == 'success') {
    $Country = $query['country'];
    $City = $query['city'];
} else {
    $Country = "";
    $City = "";
}
?>
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

                    @media only screen and (max-width: 975px){
                        button.custom-second-btn.ng-binding{
                            width: 100%;
                        }
                    }

                    .arrows_nm{
                        position: relative;
                        bottom: 55%;
                        left: 75%;
                    }

                    .arrows_m{
                        position: relative;
                        bottom: 55%;
                        left: 75%;
                    }

                    .text-black{
                        color: black;
                    }
                    .text-black option{
                        color: black;
                    }
                    select{
                        color: #000000;
                        background: white;
                        border-radius: 27px;
                        height: 54px;
                        padding: 0 25px;
                        font-family: Montserrat, sans-serif !important;
                        font-size: 14px !important;
                        letter-spacing: .7px;
                        font-weight: 500;
                        margin-bottom: 15px;
                    }

                    .force-white{
                        font-family: Montserrat, sans-serif !important;
                        font-size: 15px;
                        font-weight: 500;
                        line-height: 28px;
                        letter-spacing: 1.57px;
                        color: #fff;
                        margin-top: 0;
                        margin-bottom: 21px;
                    }

                    .red-bg{
                        display: flex;
                        justify-content: center;
                        text-align: center;
                        background: red;
                        width: 375px;
                        height: 60px;
                        border-radius: 20px;
                    }
                    .white{
                        color: black;
                    }
                    .card{
                        display: flex;
                        flex-direction: column;
                        font-size: 14px;
                        word-wrap: break-word;
                        border: 1px solid rgba(0,0,0,.125);
                        border-radius: 0.25rem;
                        background-color: white;
                    }
                    .padding{
                        padding: 3rem;
                    }
                    .head{
                        padding-top: 1rem;
                        font-size: 32px;
                        font-weight: bold;
                        text-align: center;
                    }
                    strong{
                        font-weight: bold;
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
                                        <div class="register-header">
                                            <div class="form-close-mobile"><a href="#/landing/"
                                                                              ui-sref="landing.default({})"><span
                                                        class="icon icon-icon-delete"></span></a></div>
                                        </div>

                                            <form action="index.php">
                                                <div class="register-button ng-scope"
                                                     ng-include="'app/sections/landing-partials/register-fields/register-btn.html'">
                                                    <button class="btn" style="background-color: #bc3a8d; margin-bottom: 25px; margin-top: 25px; margin-left: 25px">
                                                        BACK
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="card">
                                                <div class="header-text white head">
                                                    PRIVACY POLICY
                                                </div>
                                                <div class="white white-bg padding">
                                                    <p>
                                                        <strong>Please Note - Using our site and services will indicate that you have read, as well as accepted, this Privacy Policy. We ask that you read our Privacy Policy carefully and that you use our services if, and only if, you agree to provisions of this privacy policy.</strong><br><br>

                                                        This Privacy Policy is effective as of the date stated above and supersedes all earlier versions of our Privacy Policy.<img src="app/img2/company.png">(the “Company"), at its sole discretion, reserves the right to make changes to this Privacy Policy at any time. Your continued use of the website constitutes your ongoing consent to this Privacy Policy, and to any changes to it. Please note that the most current version is reflected by the "last revised" heading and we advise you to check it periodically. The Company takes its customers’ privacy seriously. The following document details our privacy practices and explains what personal information, if at all, we collect, how we use it, who do we share it with and your rights with regards to the information. The Company takes many measures to ensure that your information remains as secure and confidential as possible.<br><br>

                                                        <strong>What information do we collect?</strong> <br>The Company collects the following information: When you access our website, we may collect information from your device, such as IP address. When you register and/or use our services we collect your personal information. For example, when you sign up in order to write a review, we will collect your email address. This will be saved to our database and used to identify you on your next login. When you provide your contact information in connection with a third party’s product or service, which may include your first and last name, e-mail address and phone number, we will save it to our database and transfer it to such third party (who may be abroad), who will process, use and store it in accordance with its own privacy policy. We may also collect and store non-personal information (information which is non-identifiable) about how you use the website including pages viewed and where you were linked to us from. We will never ask you for personal financial data such as bank account numbers or payment details.<br><br>

                                                        <strong>How do we use the information we collect?</strong><br> The Company may use your personal information for the following purposes: To enable you to access and use our services; To communicate with you when you use the "Contact Us" feature on our website; To communicate with you via notifications and updates, including sending you information about products and services which we think may be of interest to you; To make internal statistics and data analysis, so we can improve our services.<br><br>

                                                        <strong>How do we share this information?</strong><br> Part of using our services means you consent to us disclosing some of your personal information, if necessary, to third parties. Such third parties may be the providers of certain services or products presented on our Site. In such case, we will transfer to such third party the contact information that you fill in in the respective form in connection with such service or product. This third-party service provider will be responsible for the processing of the information. In addition, such third parties may include: analytics tools and cloud host providers. Additionally, as our services are hosted by a third-party provider, Amazon Web Services (AWS), some of your information may be stored with Amazon's S3 storage service. You can find more information on Amazon's data security from the S3 website. Please note that some data recipients may be located outside the EEA. In such cases we will transfer your information only to such countries approved by the European Commission as providing adequate level of data protection, or enter into legal agreement ensuring an adequate level of data protection.<br><br>

                                                        <strong>Do we use cookies?</strong><br> To enhance your browsing experience, we do use web cookies. We delete most of our cookies as soon as you close your browser, while some are stored until deleted or expired. We use Google Analytics, a web analytics service provided by Google, Inc. ('Google'). Google Analytics uses 'cookies', text files placed on your computer, to help the web team analyze how users use the site. The information generated by the cookie (including your IP address) is transmitted to and stored by Google on servers in the United States. Google uses this information for the purpose of evaluating your use of the website, compiling reports on website activity for website operators and providing other services relating to website activity and internet usage. Google may also transfer this information to third parties where required to do so by law, or where such third parties process the information on Google's behalf. Google will not associate your IP address with any other data held by Google. You can prevent Google Analytics from recognizing you on return visits by disabling cookies on your browser. For more information on Google Analytics see: https://www.google.com/analytics/standard/features/. For more information on opting-out of Google Analytics see: https://support.google.com/analytics/answer/181881?hl=en&ref_topic=2919631 You may refuse the use of cookies by selecting the appropriate settings on your browser, however, please note that by doing so, you may not be able to use the full functionality of this website. The Company and third-party vendors, including Google, use first-party cookies (such as the Google Analytics cookie) and third-party cookies (such as the DoubleClick cookie) together to inform, optimize, and serve ads based on past website visits. By using our services, you consent to us using cookies in the manner and for the purposes set out above. The Google Analytics Opt-out Browser Add-on can be used to opt out and customize these advertisements. We may also use the Facebook pixel, which can be used to serve you ads or interact with you on social media based on your browsing behavior.<br><br>

                                                        <strong>User rights</strong> <br>You may request to:<br> Receive confirmation as to whether or not personal information concerning you is being processed and access your stored personal information, together with supplementary information. Receive a copy of personal information you directly provided to us in a structured, commonly used and machine-readable format. Request rectification of your personal information that is in our control. Request the erasure of your personal information Object to the processing of your personal information by us. Request to restrict processing of your personal information by us. Lodge a complaint with a supervisory authority. However, please note that these rights are not absolute, and may be subjected to our own legitimate interest and regulatory requirements. If you wish to exercise any of the aforementioned rights, or receive more information, please contact us at <img src="app/img2/mail.png">. If you would like to make any requests or queries regarding personal data that we transfer to or process on the third-party service provider’s behalf, please contact them directly. For example, if you wish to access, correct, or delete data processed by us on behalf of the third-party service provider, please direct your request to the relevant third-party service provider (who is the “data controller” of such data). Should we receive such requests directly, we may refer them to the third-party service provider.<br><br>

                                                        <strong>Retention Period</strong><br> We will retain your personal data for as long as necessary in order to provide our service. If you wish that we stop processing your data, we will retain and use your private data as long as required in order to comply with our legal obligations, resolve disputes and enforce our policies. When you provide your content information in connection with a third party’s product or service, we disclose such personal information to the third-party service provider shortly after you submit your details on the Site. After that, we will retain your personal data for up to 6 months or for such period as instructed by the third-party service provider who controls such data.<br><br>

                                                        <strong>How do we safeguard and transfer your information</strong><br> We take great care in implementing and maintaining the security of this site and your information. Our website uses SSL certificate and encryption, and we employ industry standard procedures and policies to ensure the safety of our users' information, and prevent unauthorized use of such information. Please keep in mind that data transmission over the internet can never be fully secure. There is always some risk involved in uploading your information online, and any information you upload or input is done so at your own risk. As for third parties, we require any third party to comply with similar security measures, in accordance with this Privacy Policy. However, we cannot be responsible for the acts of those who gain unauthorized access or abuse our services, and we make no warranty, express, implied or otherwise, that we will prevent such access.<br><br>

                                                        <strong>Third party collection of information</strong><br> Our Privacy Policy only addresses the use and disclosure of information we collect from you. To the extent that you disclose your information to other parties via our site (e.g. by clicking on a link to any other website or location, or fill in contact information in a specific form) or via other sites throughout the internet, different rules may apply to their use or disclosure of the information you disclose to them. It is important to note that such third party services may have their own privacy policies and we advise you to read them carefully. Inclusion of a link to third party website or service is not a recommendation of such a website or service. Third party may store and use the information in different jurisdictions, who may not impose the same level of protection as your own jurisdiction. Third party sites may contain information or service that is illegal, unreasonable or that some people may find inappropriate or offensive. Before using third party sites and services, providing third parties personal information or making a purchase, we recommend you to read and understand those sites’, service’ or product’s terms and conditions, warranty, and privacy policies and to ensure you agree to their terms. You acknowledge that we are not responsible for the products, services, or descriptions of those products or services that you receive from third party sites or to the content or privacy practices of those sites, and that this Privacy Policy does not apply to any such third party products and services. You are knowingly and voluntarily assuming all risks of using third party sites to purchase products and services and providing your personal information. You agree that we shall have no liability whatsoever with respect to such third party sites and your usage of them.<br><br>

                                                        <strong>Corporate Transaction</strong><br> We may share or transfer your information (including personal information) if we enter into a business transaction such as a merger, acquisition, reorganization, bankruptcy, or sale of some or all of our assets. Any party that acquires our assets as part of such a transaction may continue to use your information in accordance with the terms of this Privacy Policy.<br><br>

                                                        <strong>Minors</strong> Our site and services are not designated to users under the age of 18. If you are under 18, you should not use the site nor provide any personal information to us. We reserve the right to access and verify any personal information collected from you. In the event that we become aware that a user under the age of 18 has shared any information, we will discard such information. If you have any reason to believe that a minor has shared any information with us, please contact us at <img src="app/img2/mail.png"><br><br>

                                                        <strong>How can you help us improve?</strong><br> In an attempt to ensure that the services we provide continue to fit all of your needs, we will periodically ask you for feedback. Feel free to tell us what’s on your mind and we'll try to improve accordingly. We will not publish any of your feedback without your written consent.<br><br>

                                                        <strong>When will we contact you?</strong><br> By using our services, you agree that we are entitled to send you information via email. Information may include products, services and offers we think may interest you. That said, customers will always be able to opt-out of receiving these updates. If you do decide to unsubscribe, you can always do so by contacting <img src="app/img2/mail2.png"><br><br>

                                                        Contact information:<br>
                                                        <img src="app/img2/company.png"><br>
                                                        <img src="app/img2/mail2.png">
                                                    </p>
                                                </div>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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

<script>
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>