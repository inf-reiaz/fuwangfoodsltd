
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ======= Titles ======= -->
    <title>@yield('title','Home')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- ======= Favicon ======= -->
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- ======= Google Fonts ======= -->
    <!-- Poppins Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- ======= css ======= -->
    
    
        
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    
    <link rel="stylesheet" href="{{ asset('/public/front/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/public/front/icons/style.css') }}">
    
    
    
    <!---->
    <!---->
    <!---->
    <link rel="stylesheet" href="{{ asset('/public/front/css/pogo-slider.css') }}">
    <!-- ====== modernizr js ======= -->
    <script src="{{ asset('/public/front/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    
    

    
    <style>

.tp-row-logo {
    padding-top: 10px;
}       


.header-menu-2 {
    border-top: 4px solid #f19d34;
}


.wrap-top-openh, .wrap-top-contact {
    padding-top: 13px;
}

.wrap-top-social {
    margin-top: 4px;
    text-align: center;
    display: inline-block;
}

.wrap-top-social li:first-child {
    margin-left: 0;
    display: block;
    margin-bottom: 5px;
    text-align: left;
}

.top-socail-text {
    text-transform: capitalize;
    font-size: 14px;
    line-height: 29px;
    letter-spacing: 2px;
}

.wrap-top-social li:nth-child(2) {
    margin-left: 0;
}

.wrap-top-social li {
    display: inline-block;
    margin-left: 10px;
}

.wrap-top-social li a {
    color: #787d85;
    font-size: 17px;
    transition: all .4s;
    -webkit-transition: all .4s;
    -moz-transition: all .4s;
    -o-transition: all .4s;
    -ms-transition: all .4s;
}


.wrap-top-logo {
    text-align: center;
}

.wrap-top-contact {
    display: inline-block;
}

.topcontact-email, .topcontact-phone {
    display: block;
    float: left;
    clear: both;
    text-align: right;
    line-height: 31px;
}

.topcontact-email i, .topcontact-phone i {
    font-size: 16px;
    margin-right: 15px;
    float: left;
    line-height: 31px;
}

/* menu */

.tp-menu_2 {
    position: relative;
    border-top: 1px solid #f3f3f3;
    margin-top: 20px;
}
.container-header {
    position: relative;
    padding: 0;
}


div, ul, li, header, nav, section, span, article {
    padding: 0;
    margin: 0;
}

.get_quotesearch, .wrap_cartsearch {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
}

.tp-menu_2 .get_quotesearch .col-search {
    position: relative;
    background: #eceff4;
}

.get_quotesearch li {
    display: inline-block;
    float: right;
}

.tp-menu_2 .get_quotesearch>.phone_menu, .wrap_cartsearch>.phone_menu {
    display: none;
    visibility: hidden;
}

.tp-menu_2 .get_quotesearch .col-search>i {
    font-size: 20px;
    line-height: 25px;
    color: #232323;
    padding: 15px 20px;
}

.search-content {
    position: absolute;
    right: 0;
    width: 300px;
    top: 97%;
    margin-top: 4px;
    background: #fff;
    display: none;
    box-shadow: 0 1px 20px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 20px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 1px 20px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 1px 20px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 1px 20px rgba(0, 0, 0, 0.1);
    padding: 14px 15px;
    z-index: 999;
    border: 3px solid #cad3df;
}

.tp-top-search {
    position: relative;
}

.icon-Team:before {
    content: "\e903";
    color: #f19d34;
}

.icon-Factory:before {
    content: "\e901";
    color: #f19d34;
}

.icon-Employee:before {
    content: "\e900";
    color: #f19d34;
}

.icon-Products:before {
    content: "\e902";
   color: #f19d34;
}


.page-title-area {
    padding: 1px !important;
}

.top-search {
    border: none;
    width: 100%;
    color: #232323;
    border-radius: 6px;
    padding: 13px;
    background: #cad3df;
}
.ltop-search {
    position: absolute;
    line-height: 0;
    padding: 23px;
    top: 0;
    display: inline-block;
    left: 0;
    transition: all .4s ease-in-out;
    color: #232323;
    cursor: pointer;
    font-weight: 400;
    font-size: 12px;
}

.top-search-btn {
    padding: 22px 30px;
    display: inline-block;
    float: right;
    border: 0;
    transition: all .4s ease-in-out;
    cursor: pointer;
    text-align: center;
    position: absolute;
    top: 0;
    right: 0;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: all .4s;
    -moz-transition: all .4s;
    -webkit-transition: all .4s;
    -ms-transition: all .4s;
    -o-transition: all .4s;
    bottom: 0;
}



.tp-menu_2 .get_quotesearch>.get-quote>a {
    line-height: 25px;
}


.tp-menu_2 .get_quotesearch>.get-quote:before, .tp-menu_2 .get_quotesearch>.get-quote>a {
    background: #f19d34;
    color: #fff;
}


.tpnav_2>li>a, .get_quotesearch>li>a {
    position: relative;
    text-transform: uppercase;
    padding: 15px 18px;
    display: inline-block;
    font-weight: 600;
    border-right: 1px solid #f3f3f3;
    color: #232323;
}

.tp-menu_2 .get_quotesearch>.get-quote:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    transform: skewX(-30deg);
    -webkit-transform: skewX(-30deg);
    -moz-transform: skewX(-30deg);
    -ms-transform: skewX(-30deg);
    -o-transform: skewX(-30deg);
    width: 40px;
    left: -25px;
}


.tpnav>li {
    display: inline-block;
}

.tpnav_2>.active>a, .tpnav_2>li:hover>a, .tpnav_2>.active>a:before {
    color: #f19d34;
}

.tpnav_2>li>a, .get_quotesearch>li>a {
    position: relative;
    text-transform: uppercase;
    padding: 15px 18px;
    display: inline-block;
    font-weight: 600;
    border-right: 1px solid #f3f3f3;
    color: #232323;
}

.tpnav>li>a, .col-search>i, .col-cart>i {
    position: relative;
    text-transform: uppercase;
    color: #000;
    padding: 30px 17px;
    display: inline-block;
    font-weight: 600;
    font-size: 12px;
    line-height: 25px;
}

.tpnav_2>.sub-menu>a:before {
    content: "\f0d7";
    position: absolute;
    font-size: 14px;
    right: 5px;
    color: #232323;
    font-weight: normal!important;
    line-height: 26px;
}

.tpnav>.sub-menu>a:before {
    content: "\f107";
    position: absolute;
    font-size: 12px;
    right: 5px;
    color: #fff;
    font-weight: normal!important;
    line-height: 24px;
}

.tpnav>.active>a:after, .tpnav>li:hover>a:after, .col-search:hover>i:after, .col-cart:hover>i:after {
    position: absolute;
    content: "";
    left: -1%;
    right: -8%;
    top: 28%;
    background: #fff;
    bottom: 28%;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 80px;
    z-index: -1;
}

.tpnav_2>li>a:after {
    content: "";
}


/*.container.container-header {*/
/*    height: 53px;*/
/*}*/

.tpnav_2>li>a, .get_quotesearch>li>a {
    position: relative;
    text-transform: uppercase;
    padding: 15px 18px;
    display: inline-block;
    font-weight: 600;
    border-right: 1px solid #f3f3f3;
    color: #232323;
}



@media only screen and (max-width: 1180px) {
    
    .tpnav_2>li>a, .get_quotesearch>li>a {
        padding: 15px 10px;
    }
    
}

@media only screen and (max-width: 991px) {
    
    .tpnav_2>li>a, .get_quotesearch>li>a {
        padding: 15px 1px;
    }
    
}


@media only screen and (max-width: 767px) {
    
    .col-md-4.col-sm-4.col-xs-12.col-top-openh {
        position: absolute;
        margin-top: 76px;
        font-size: 0px;
    }
    
    .wrap-top-logo img {
        width: 70%;
        padding-bottom: 15px;
    }
    
    
    .owl-stage-outer {
        height: 140px;
    }
    
    .tp-menu_2 .get_quotesearch>.get-quote:before {
        /*width: 0px;*/
        transform: skewX(0deg);
        -webkit-transform: skewX(0deg);
        -moz-transform: skewX(0deg);
        -ms-transform: skewX(0deg);
        -o-transform: skewX(0deg);
        width: 40px;
        left: -5px;
    }
    
    /*reiaz*/
    
    .tpnav_2>li>a, .get_quotesearch>li>a {
        padding: 15px 1px !important;
    }
    
    .header-logo>img {
        margin-top: -10px;
    }
    
.get_quotesearch, .wrap_cartsearch {
    position: absolute;
    top: 55px;
    bottom: 0;
    right: 8px;
}


.tpnav.tpnav_2 {
    margin-left: 10px;
    width: 97%;
}

.wrap-top-contact.pull-right {
    font-size: 13px;
    padding-top: 20px;
}

    /*reiaz*/
    
}


@media only screen and (max-width: 360px) {
        .tp-menu_2 .get_quotesearch>.get-quote:before {
            /*width: 0px;*/
            transform: skewX(0deg);
            -webkit-transform: skewX(0deg);
            -moz-transform: skewX(0deg);
            -ms-transform: skewX(0deg);
            -o-transform: skewX(0deg);
            width: 40px;
            left: -5px;
        }
        
        .tpnav_2>li>a, .get_quotesearch>li>a {
            padding: 15px 1px !important;
            font-size: 10px;
        }
        
}


    </style>
    
    @yield('css')