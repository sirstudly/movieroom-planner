

<!DOCTYPE html>
<html>
<!-- Header -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tiva Timetable</title>

    <!------------ Assets for Tiva Timetable ------------->
    <!-- Timetable Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css' />

    <!-- Timetable CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/timetable.css')}}">

    <!-- Timetable JS Files -->
    <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/js/jquery.magnific-popup.js')}}"></script>
    <!--------------------------------------------------->

    <!-------------- CSS Files for example -------------->
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div class="header">
            <div class="header-big">Tiva Timetable</div>
            <div class="header-small">A truly responsive schedule calendar.</div>
        </div>

        <div class="content">
            <div class="section">
                <h2>Introduction</h2>
                <p>Tiva Timetable is a responsive schedule calendar with clean and modern flat interface. It is very easy to use yet gives plenty of features and styling options. You can use it for any kind of schedule or events calendar.
                </p><div class="timetable-example">
                    <div class="tiva-timetable" data-view="week" data-mode="day" data-start="monday" id="timetable-1">
                        <div class="timetable-week show-time">
                            <div class="timetable-axis">
                                <div class="axis-item">09:00</div>
                                <div class="axis-item">10:00</div>
                                <div class="axis-item">11:00</div>
                                <div class="axis-item">12:00</div>
                                <div class="axis-item">13:00</div>
                                <div class="axis-item">14:00</div>
                                <div class="axis-item">15:00</div>
                                <div class="axis-item">16:00</div>
                                <div class="axis-item">17:00</div>
                                <div class="axis-item">18:00</div>
                                <div class="axis-item">19:00</div>
                            </div>
                            <div class="timetable-columns">
                                <div class="timetable-column">
                                    <div class="timetable-column-header ">Monday<br><span>Sep 27, 2021</span></div>
                                    <div class="timetable-column-content">
                                        <div class="timetable-item"><a id="testpop3" class="timetable-title color-3"
                                                                       style="top:82px; height:110px; "
                                                                       href="#timetable-popup-3">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">XXX Lucha Libre</div>
                                                    <div class="timetable-time">10:30 - 12:30</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-3"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-3">Lucha Libre</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/lucha_libre.jpg"
                                                                alt="Lucha Libre"></div>
                                                    <div class="timetable-time color-3">10:30 - 12:30</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-2"
                                                                       style="top:247px; height:137px; "
                                                                       href="#timetable-popup-8">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Festival of Praise Tour</div>
                                                    <div class="timetable-time">13:30 - 16:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-8"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-2">Festival of Praise Tour</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/festival_of_praise_tour.jpg"
                                                                alt="Festival of Praise Tour"></div>
                                                    <div class="timetable-time color-2">13:30 - 16:00</div>
                                                    <div class="timetable-desc">HEZEKIAH WALKER , ISRAEL HOUGHTON,
                                                        REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD,
                                                        COMEDIAN EARTHQUAKE<br>
                                                        <br>
                                                        Tickets:<br>
                                                        $52.50 Row 1-5<br>
                                                        $47.50 Row 6-13<br>
                                                        $37.50 Row 14-20<br>
                                                        $27.50 Row 21-25
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timetable-column-grid">
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                        <div class="grid-item first-column"></div>
                                    </div>
                                </div>
                                <div class="timetable-column">
                                    <div class="timetable-column-header ">Tuesday<br><span>Sep 28, 2021</span></div>
                                    <div class="timetable-column-content">
                                        <div class="timetable-item"><a class="timetable-title color-1"
                                                                       style="top:55px; height:82px; "
                                                                       href="#timetable-popup-1">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Musiq SoulChild - Grown &amp; Sexy 16
                                                    </div>
                                                    <div class="timetable-time">10:00 - 11:30</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-1"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-1">Musiq SoulChild - Grown &amp; Sexy
                                                    16
                                                </div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/musiq_soulchild.jpg"
                                                                alt="Musiq SoulChild - Grown &amp; Sexy 16"></div>
                                                    <div class="timetable-time color-1">10:00 - 11:30</div>
                                                    <div class="timetable-desc">Grown &amp; Sexy 16<br>
                                                        Musiq SoulChild and Avant<br>
                                                        <br>
                                                        Tickets:<br>
                                                        $55.00 - Row 1-5<br>
                                                        $45.00 - Row 6-13<br>
                                                        $35.00 - Row 14-20<br>
                                                        $20.00 - Row 21-25
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-4"
                                                                       style="top:330px; height:165px; width:50%;"
                                                                       href="#timetable-popup-11">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Lucha Libre</div>
                                                    <div class="timetable-time">15:00 - 18:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-11"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-4">Lucha Libre</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/lucha_libre.jpg"
                                                                alt="Lucha Libre"></div>
                                                    <div class="timetable-time color-4">15:00 - 18:00</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-3"
                                                                       style="top:330px; height:165px; width:50%;left:50%"
                                                                       href="#timetable-popup-12">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Roger Hodgson</div>
                                                    <div class="timetable-time">15:00 - 18:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-12"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-3">Roger Hodgson</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/roger_hodgson.jpg"
                                                                alt="Roger Hodgson"></div>
                                                    <div class="timetable-time color-3">15:00 - 18:00</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timetable-column-grid">
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                    </div>
                                </div>
                                <div class="timetable-column">
                                    <div class="timetable-column-header ">Wednesday<br><span>Sep 29, 2021</span></div>
                                    <div class="timetable-column-content">
                                        <div class="timetable-item"><a class="timetable-title color-4"
                                                                       style="top:110px; height:55px; "
                                                                       href="#timetable-popup-4">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Roger Hodgson</div>
                                                    <div class="timetable-time">11:00 - 12:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-4"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-4">Roger Hodgson</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/roger_hodgson.jpg"
                                                                alt="Roger Hodgson"></div>
                                                    <div class="timetable-time color-4">11:00 - 12:00</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-1"
                                                                       style="top:220px; height:137px; "
                                                                       href="#timetable-popup-7">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Musiq SoulChild - Grown &amp; Sexy 16
                                                    </div>
                                                    <div class="timetable-time">13:00 - 15:30</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-7"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-1">Musiq SoulChild - Grown &amp; Sexy
                                                    16
                                                </div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/musiq_soulchild.jpg"
                                                                alt="Musiq SoulChild - Grown &amp; Sexy 16"></div>
                                                    <div class="timetable-time color-1">13:00 - 15:30</div>
                                                    <div class="timetable-desc">Grown &amp; Sexy 16<br>
                                                        Musiq SoulChild and Avant<br>
                                                        <br>
                                                        Tickets:<br>
                                                        $55.00 - Row 1-5<br>
                                                        $45.00 - Row 6-13<br>
                                                        $35.00 - Row 14-20<br>
                                                        $20.00 - Row 21-25
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timetable-column-grid">
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                    </div>
                                </div>
                                <div class="timetable-column">
                                    <div class="timetable-column-header ">Thursday<br><span>Sep 30, 2021</span></div>
                                    <div class="timetable-column-content">
                                        <div class="timetable-item"><a class="timetable-title color-2"
                                                                       style="top:192px; height:82px; "
                                                                       href="#timetable-popup-6">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Lucha Libre</div>
                                                    <div class="timetable-time">12:30 - 14:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-6"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-2">Lucha Libre</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/lucha_libre.jpg"
                                                                alt="Lucha Libre"></div>
                                                    <div class="timetable-time color-2">12:30 - 14:00</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-3"
                                                                       style="top:385px; height:165px; "
                                                                       href="#timetable-popup-14">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Festival of Praise Tour</div>
                                                    <div class="timetable-time">16:00 - 19:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-14"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-3">Festival of Praise Tour</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/festival_of_praise_tour.jpg"
                                                                alt="Festival of Praise Tour"></div>
                                                    <div class="timetable-time color-3">16:00 - 19:00</div>
                                                    <div class="timetable-desc">HEZEKIAH WALKER , ISRAEL HOUGHTON,
                                                        REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD,
                                                        COMEDIAN EARTHQUAKE<br>
                                                        <br>
                                                        Tickets:<br>
                                                        $52.50 Row 1-5<br>
                                                        $47.50 Row 6-13<br>
                                                        $37.50 Row 14-20<br>
                                                        $27.50 Row 21-25
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timetable-column-grid">
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                    </div>
                                </div>
                                <div class="timetable-column">
                                    <div class="timetable-column-header ">Friday<br><span>Oct 1, 2021</span></div>
                                    <div class="timetable-column-content">
                                        <div class="timetable-item"><a class="timetable-title color-1"
                                                                       style="top:73px; height:64px; "
                                                                       href="#timetable-popup-2">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Lucha Libre</div>
                                                    <div class="timetable-time">10:20 - 11:30</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-2"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-1">Lucha Libre</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/lucha_libre.jpg"
                                                                alt="Lucha Libre"></div>
                                                    <div class="timetable-time color-1">10:20 - 11:30</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-4"
                                                                       style="top:330px; height:137px; "
                                                                       href="#timetable-popup-13">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Roger Hodgson</div>
                                                    <div class="timetable-time">15:00 - 17:30</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-13"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-4">Roger Hodgson</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/roger_hodgson.jpg"
                                                                alt="Roger Hodgson"></div>
                                                    <div class="timetable-time color-4">15:00 - 17:30</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timetable-column-grid">
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                    </div>
                                </div>
                                <div class="timetable-column">
                                    <div class="timetable-column-header ">Saturday<br><span>Oct 2, 2021</span></div>
                                    <div class="timetable-column-content">
                                        <div class="timetable-item"><a class="timetable-title color-3"
                                                                       style="top:137px; height:82px; "
                                                                       href="#timetable-popup-5">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Lucha Libre</div>
                                                    <div class="timetable-time">11:30 - 13:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-5"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-3">Lucha Libre</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/lucha_libre.jpg"
                                                                alt="Lucha Libre"></div>
                                                    <div class="timetable-time color-3">11:30 - 13:00</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-2"
                                                                       style="top:302px; height:110px; "
                                                                       href="#timetable-popup-9">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Festival of Praise Tour</div>
                                                    <div class="timetable-time">14:30 - 16:30</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-9"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-2">Festival of Praise Tour</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/festival_of_praise_tour.jpg"
                                                                alt="Festival of Praise Tour"></div>
                                                    <div class="timetable-time color-2">14:30 - 16:30</div>
                                                    <div class="timetable-desc">HEZEKIAH WALKER , ISRAEL HOUGHTON,
                                                        REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD,
                                                        COMEDIAN EARTHQUAKE<br>
                                                        <br>
                                                        Tickets:<br>
                                                        $52.50 Row 1-5<br>
                                                        $47.50 Row 6-13<br>
                                                        $37.50 Row 14-20<br>
                                                        $27.50 Row 21-25
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-1"
                                                                       style="top:495px; height:55px; "
                                                                       href="#timetable-popup-15">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Roger Hodgson</div>
                                                    <div class="timetable-time">18:00 - 19:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-15"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-1">Roger Hodgson</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/roger_hodgson.jpg"
                                                                alt="Roger Hodgson"></div>
                                                    <div class="timetable-time color-1">18:00 - 19:00</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timetable-column-grid">
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                    </div>
                                </div>
                                <div class="timetable-column">
                                    <div class="timetable-column-header last-column">Sunday<br><span>Oct 3, 2021</span>
                                    </div>
                                    <div class="timetable-column-content">
                                        <div class="timetable-item"><a class="timetable-title color-4"
                                                                       style="top:27px; height:82px; "
                                                                       href="#timetable-popup-0">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Roger Hodgson</div>
                                                    <div class="timetable-time">09:30 - 11:00</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-0"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-4">Roger Hodgson</div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/roger_hodgson.jpg"
                                                                alt="Roger Hodgson"></div>
                                                    <div class="timetable-time color-4">09:30 - 11:00</div>
                                                    <div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nullam non ornare eros. Ut pharetra ornare
                                                        lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor
                                                        sit amet, consectetur adipiscing elit. Nullam non ornare eros.
                                                        Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                        non ornare eros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timetable-item"><a class="timetable-title color-1"
                                                                       style="top:330px; height:137px; "
                                                                       href="#timetable-popup-10">
                                                <div class="timetable-title-wrap">
                                                    <div class="timetable-name">Musiq SoulChild - Grown &amp; Sexy 16
                                                    </div>
                                                    <div class="timetable-time">15:00 - 17:30</div>
                                                </div>
                                            </a>
                                            <div id="timetable-popup-10"
                                                 class="timetable-popup zoom-anim-dialog mfp-hide">
                                                <div class="popup-header color-1">Musiq SoulChild - Grown &amp; Sexy
                                                    16
                                                </div>
                                                <div class="popup-body">
                                                    <div class="timetable-image"><img
                                                                src="admin/timetable/images/musiq_soulchild.jpg"
                                                                alt="Musiq SoulChild - Grown &amp; Sexy 16"></div>
                                                    <div class="timetable-time color-1">15:00 - 17:30</div>
                                                    <div class="timetable-desc">Grown &amp; Sexy 16<br>
                                                        Musiq SoulChild and Avant<br>
                                                        <br>
                                                        Tickets:<br>
                                                        $55.00 - Row 1-5<br>
                                                        $45.00 - Row 6-13<br>
                                                        $35.00 - Row 14-20<br>
                                                        $20.00 - Row 21-25
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timetable-column-grid">
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                        <div class="grid-item "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="features">
                <h2>Features</h2>
                <p>Tiva Timetable has many good features for your demand</p>
                <div class="features-list">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:0">
                        <img class="img-responsive" src="images/temp/tiva_timetable.png" alt="Tiva Timetable Features">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-tablet"></i>
                            </div>
                            <div class="features-content">
                                <h3>Fully Responsive</h3>
                                <p>Tiva Timetable is fully responsive and mobile friendly. It display fine on mobile devices.</p>
                            </div>
                        </div>
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-gear"></i>
                            </div>
                            <div class="features-content">
                                <h3>Easy To Setup</h3>
                                <p>It is so easy to use Tiva Timetable. Just include some css and js files, then display the calendar by html shortcode.</p>
                            </div>
                        </div>
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-paint-brush"></i>
                            </div>
                            <div class="features-content">
                                <h3>Easy To Customize</h3>
                                <p>There are options for you to customize the timetable like show/hide navigation, start on monday or sunday, ...</p>
                            </div>
                        </div>
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-dashboard"></i>
                            </div>
                            <div class="features-content">
                                <h3>Admin Panel</h3>
                                <p>There is admin panel for you to manage timetables (create new, edit, delete, ...) and users.</p>
                            </div>
                        </div>
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-th"></i>
                            </div>
                            <div class="features-content">
                                <h3>Layouts</h3>
                                <p>There are 3 layouts for your choice: month, week and list.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="monthly-view">
                <h2>Monthly View</h2>
                <p>Display all your timetables via month.</p>
                <div class="timetable-example">
                    <div class="tiva-timetable" data-start="monday" id="timetable-2"><div class="time-navigation"><span class="navi-icon navi-prev" onclick="naviClick('timetable-2', 'prevmo', '', 10, 2021)">❮</span><span class="navi-time">October&nbsp;&nbsp;2021</span><span class="navi-icon navi-next" onclick="naviClick('timetable-2', 'nextmo', '', 10, 2021)">❯</span></div><table class="timetable-month"><tbody><tr><th class="timetable-header">Monday</th><th class="timetable-header">Tuesday</th><th class="timetable-header">Wednesday</th><th class="timetable-header">Thursday</th><th class="timetable-header">Friday</th><th class="timetable-header">Saturday</th><th class="timetable-header">Sunday</th></tr><tr><td class="calendar-day "></td><td class="calendar-day "></td><td class="calendar-day "></td><td class="calendar-day "></td><td class="calendar-day "><div class="calendar-daycounter">1</div></td><td class="calendar-day "><div class="calendar-daycounter">2</div></td><td class="calendar-day today"><div class="calendar-daycounter">3</div></td></tr><tr><td class="calendar-day "><div class="calendar-daycounter">4</div></td><td class="calendar-day "><div class="calendar-daycounter">5</div></td><td class="calendar-day "><div class="calendar-daycounter">6</div></td><td class="calendar-day "><div class="calendar-daycounter">7</div></td><td class="calendar-day "><div class="calendar-daycounter">8</div></td><td class="calendar-day "><div class="calendar-daycounter">9</div></td><td class="calendar-day "><div class="calendar-daycounter">10</div></td></tr><tr><td class="calendar-day "><div class="calendar-daycounter">11</div></td><td class="calendar-day "><div class="calendar-daycounter">12</div></td><td class="calendar-day "><div class="calendar-daycounter">13</div></td><td class="calendar-day "><div class="calendar-daycounter">14</div></td><td class="calendar-day "><div class="calendar-daycounter">15</div></td><td class="calendar-day "><div class="calendar-daycounter">16</div></td><td class="calendar-day "><div class="calendar-daycounter">17</div></td></tr><tr><td class="calendar-day "><div class="calendar-daycounter">18</div></td><td class="calendar-day "><div class="calendar-daycounter">19</div></td><td class="calendar-day "><div class="calendar-daycounter">20</div></td><td class="calendar-day "><div class="calendar-daycounter">21</div></td><td class="calendar-day "><div class="calendar-daycounter">22</div></td><td class="calendar-day "><div class="calendar-daycounter">23</div></td><td class="calendar-day "><div class="calendar-daycounter">24</div></td></tr><tr><td class="calendar-day "><div class="calendar-daycounter">25</div></td><td class="calendar-day "><div class="calendar-daycounter">26</div></td><td class="calendar-day "><div class="calendar-daycounter">27</div></td><td class="calendar-day "><div class="calendar-daycounter">28</div></td><td class="calendar-day "><div class="calendar-daycounter">29</div></td><td class="calendar-day "><div class="calendar-daycounter">30</div></td><td class="calendar-day "><div class="calendar-daycounter">31</div></td></tr></tbody></table></div>
                </div>
            </div>

            <div class="section" id="weekly-view">
                <h2>Weekly View</h2>
                <p>Display all your timetables via week. You can use as day schedule (repeat on every week) or as specific date (like monthly view).</p>
                <div class="timetable-example">
                    <div class="tiva-timetable" data-view="week" data-start="monday" id="timetable-3"><div class="time-navigation"><span class="navi-icon navi-prev" onclick="naviClick('timetable-3', 'prevwe', 'Mon Sep 27 2021 02:48:36 GMT+0100 (British Summer Time)', 9, 2021)">❮</span><span class="navi-time">Sep 27 - Oct 3, 2021</span><span class="navi-icon navi-next" onclick="naviClick('timetable-3', 'nextwe', 'Mon Sep 27 2021 02:48:36 GMT+0100 (British Summer Time)', 9, 2021)">❯</span></div><div class="timetable-week show-time"><div class="timetable-axis"><div class="axis-item">08:00</div><div class="axis-item">09:00</div><div class="axis-item">10:00</div><div class="axis-item">11:00</div><div class="axis-item">12:00</div><div class="axis-item">13:00</div><div class="axis-item">14:00</div><div class="axis-item">15:00</div></div><div class="timetable-columns"><div class="timetable-column"><div class="timetable-column-header ">Monday<br><span>Sep 27, 2021</span></div><div class="timetable-column-content"></div><div class="timetable-column-grid"><div class="grid-item first-column"></div><div class="grid-item first-column"></div><div class="grid-item first-column"></div><div class="grid-item first-column"></div><div class="grid-item first-column"></div><div class="grid-item first-column"></div><div class="grid-item first-column"></div></div></div><div class="timetable-column"><div class="timetable-column-header ">Tuesday<br><span>Sep 28, 2021</span></div><div class="timetable-column-content"></div><div class="timetable-column-grid"><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div></div></div><div class="timetable-column"><div class="timetable-column-header ">Wednesday<br><span>Sep 29, 2021</span></div><div class="timetable-column-content"></div><div class="timetable-column-grid"><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div></div></div><div class="timetable-column"><div class="timetable-column-header ">Thursday<br><span>Sep 30, 2021</span></div><div class="timetable-column-content"></div><div class="timetable-column-grid"><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div></div></div><div class="timetable-column"><div class="timetable-column-header ">Friday<br><span>Oct 1, 2021</span></div><div class="timetable-column-content"></div><div class="timetable-column-grid"><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div></div></div><div class="timetable-column"><div class="timetable-column-header ">Saturday<br><span>Oct 2, 2021</span></div><div class="timetable-column-content"></div><div class="timetable-column-grid"><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div></div></div><div class="timetable-column"><div class="timetable-column-header last-column">Sunday<br><span>Oct 3, 2021</span></div><div class="timetable-column-content"></div><div class="timetable-column-grid"><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div><div class="grid-item "></div></div></div></div></div></div>
                </div>
            </div>

            <div class="section" id="list-view">
                <h2>List View</h2>
                <p>Display all your timetables on list. You can use as day schedule (repeat on every week) or as specific date (like monthly view).</p>
                <div class="timetable-example">
                    <div class="tiva-timetable" data-view="list" data-mode="day" data-start="monday" id="timetable-4"><div class="timetable-list"><div class="timetable-day"><div class="timetable-header">Monday<span>Sep 27, 2021</span></div><div class="timetable-content"><div class="timetable-item"><span class="timetable-color color-3"></span><a class="timetable-title" href="#timetable-popup-3"><span class="timetable-time">10:30 - 12:30</span><span class="timetable-name">Lucha Libre</span></a><div id="timetable-popup-3" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-3">Lucha Libre</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/lucha_libre.jpg" alt="Lucha Libre"></div><div class="timetable-time color-3">10:30 - 12:30</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div><div class="timetable-item"><span class="timetable-color color-2"></span><a class="timetable-title" href="#timetable-popup-8"><span class="timetable-time">13:30 - 16:00</span><span class="timetable-name">Festival of Praise Tour</span></a><div id="timetable-popup-8" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-2">Festival of Praise Tour</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/festival_of_praise_tour.jpg" alt="Festival of Praise Tour"></div><div class="timetable-time color-2">13:30 - 16:00</div><div class="timetable-desc">HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br>
                                                    <br>
                                                    Tickets:<br>
                                                    $52.50 Row 1-5<br>
                                                    $47.50 Row 6-13<br>
                                                    $37.50 Row 14-20<br>
                                                    $27.50 Row 21-25</div></div></div></div></div></div><div class="timetable-day"><div class="timetable-header">Tuesday<span>Sep 28, 2021</span></div><div class="timetable-content"><div class="timetable-item"><span class="timetable-color color-1"></span><a class="timetable-title" href="#timetable-popup-1"><span class="timetable-time">10:00 - 11:30</span><span class="timetable-name">Musiq SoulChild - Grown &amp; Sexy 16</span></a><div id="timetable-popup-1" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-1">Musiq SoulChild - Grown &amp; Sexy 16</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/musiq_soulchild.jpg" alt="Musiq SoulChild - Grown &amp; Sexy 16"></div><div class="timetable-time color-1">10:00 - 11:30</div><div class="timetable-desc">Grown &amp; Sexy 16<br>
                                                    Musiq SoulChild and Avant<br>
                                                    <br>
                                                    Tickets:<br>
                                                    $55.00 - Row 1-5<br>
                                                    $45.00 - Row 6-13<br>
                                                    $35.00 - Row 14-20<br>
                                                    $20.00 - Row 21-25</div></div></div></div><div class="timetable-item"><span class="timetable-color color-4"></span><a class="timetable-title" href="#timetable-popup-11"><span class="timetable-time">15:00 - 18:00</span><span class="timetable-name">Lucha Libre</span></a><div id="timetable-popup-11" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-4">Lucha Libre</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/lucha_libre.jpg" alt="Lucha Libre"></div><div class="timetable-time color-4">15:00 - 18:00</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div><div class="timetable-item"><span class="timetable-color color-3"></span><a class="timetable-title" href="#timetable-popup-12"><span class="timetable-time">15:00 - 18:00</span><span class="timetable-name">Roger Hodgson</span></a><div id="timetable-popup-12" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-3">Roger Hodgson</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/roger_hodgson.jpg" alt="Roger Hodgson"></div><div class="timetable-time color-3">15:00 - 18:00</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div></div></div><div class="timetable-day"><div class="timetable-header">Wednesday<span>Sep 29, 2021</span></div><div class="timetable-content"><div class="timetable-item"><span class="timetable-color color-4"></span><a class="timetable-title" href="#timetable-popup-4"><span class="timetable-time">11:00 - 12:00</span><span class="timetable-name">Roger Hodgson</span></a><div id="timetable-popup-4" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-4">Roger Hodgson</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/roger_hodgson.jpg" alt="Roger Hodgson"></div><div class="timetable-time color-4">11:00 - 12:00</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div><div class="timetable-item"><span class="timetable-color color-1"></span><a class="timetable-title" href="#timetable-popup-7"><span class="timetable-time">13:00 - 15:30</span><span class="timetable-name">Musiq SoulChild - Grown &amp; Sexy 16</span></a><div id="timetable-popup-7" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-1">Musiq SoulChild - Grown &amp; Sexy 16</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/musiq_soulchild.jpg" alt="Musiq SoulChild - Grown &amp; Sexy 16"></div><div class="timetable-time color-1">13:00 - 15:30</div><div class="timetable-desc">Grown &amp; Sexy 16<br>
                                                    Musiq SoulChild and Avant<br>
                                                    <br>
                                                    Tickets:<br>
                                                    $55.00 - Row 1-5<br>
                                                    $45.00 - Row 6-13<br>
                                                    $35.00 - Row 14-20<br>
                                                    $20.00 - Row 21-25</div></div></div></div></div></div><div class="timetable-day"><div class="timetable-header">Thursday<span>Sep 30, 2021</span></div><div class="timetable-content"><div class="timetable-item"><span class="timetable-color color-2"></span><a class="timetable-title" href="#timetable-popup-6"><span class="timetable-time">12:30 - 14:00</span><span class="timetable-name">Lucha Libre</span></a><div id="timetable-popup-6" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-2">Lucha Libre</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/lucha_libre.jpg" alt="Lucha Libre"></div><div class="timetable-time color-2">12:30 - 14:00</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div><div class="timetable-item"><span class="timetable-color color-3"></span><a class="timetable-title" href="#timetable-popup-14"><span class="timetable-time">16:00 - 19:00</span><span class="timetable-name">Festival of Praise Tour</span></a><div id="timetable-popup-14" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-3">Festival of Praise Tour</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/festival_of_praise_tour.jpg" alt="Festival of Praise Tour"></div><div class="timetable-time color-3">16:00 - 19:00</div><div class="timetable-desc">HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br>
                                                    <br>
                                                    Tickets:<br>
                                                    $52.50 Row 1-5<br>
                                                    $47.50 Row 6-13<br>
                                                    $37.50 Row 14-20<br>
                                                    $27.50 Row 21-25</div></div></div></div></div></div><div class="timetable-day"><div class="timetable-header">Friday<span>Oct 1, 2021</span></div><div class="timetable-content"><div class="timetable-item"><span class="timetable-color color-1"></span><a class="timetable-title" href="#timetable-popup-2"><span class="timetable-time">10:20 - 11:30</span><span class="timetable-name">Lucha Libre</span></a><div id="timetable-popup-2" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-1">Lucha Libre</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/lucha_libre.jpg" alt="Lucha Libre"></div><div class="timetable-time color-1">10:20 - 11:30</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div><div class="timetable-item"><span class="timetable-color color-4"></span><a class="timetable-title" href="#timetable-popup-13"><span class="timetable-time">15:00 - 17:30</span><span class="timetable-name">Roger Hodgson</span></a><div id="timetable-popup-13" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-4">Roger Hodgson</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/roger_hodgson.jpg" alt="Roger Hodgson"></div><div class="timetable-time color-4">15:00 - 17:30</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div></div></div><div class="timetable-day"><div class="timetable-header">Saturday<span>Oct 2, 2021</span></div><div class="timetable-content"><div class="timetable-item"><span class="timetable-color color-3"></span><a class="timetable-title" href="#timetable-popup-5"><span class="timetable-time">11:30 - 13:00</span><span class="timetable-name">Lucha Libre</span></a><div id="timetable-popup-5" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-3">Lucha Libre</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/lucha_libre.jpg" alt="Lucha Libre"></div><div class="timetable-time color-3">11:30 - 13:00</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div><div class="timetable-item"><span class="timetable-color color-2"></span><a class="timetable-title" href="#timetable-popup-9"><span class="timetable-time">14:30 - 16:30</span><span class="timetable-name">Festival of Praise Tour</span></a><div id="timetable-popup-9" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-2">Festival of Praise Tour</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/festival_of_praise_tour.jpg" alt="Festival of Praise Tour"></div><div class="timetable-time color-2">14:30 - 16:30</div><div class="timetable-desc">HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br>
                                                    <br>
                                                    Tickets:<br>
                                                    $52.50 Row 1-5<br>
                                                    $47.50 Row 6-13<br>
                                                    $37.50 Row 14-20<br>
                                                    $27.50 Row 21-25</div></div></div></div><div class="timetable-item"><span class="timetable-color color-1"></span><a class="timetable-title" href="#timetable-popup-15"><span class="timetable-time">18:00 - 19:00</span><span class="timetable-name">Roger Hodgson</span></a><div id="timetable-popup-15" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-1">Roger Hodgson</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/roger_hodgson.jpg" alt="Roger Hodgson"></div><div class="timetable-time color-1">18:00 - 19:00</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div></div></div><div class="timetable-day"><div class="timetable-header">Sunday<span>Oct 3, 2021</span></div><div class="timetable-content"><div class="timetable-item"><span class="timetable-color color-4"></span><a class="timetable-title" href="#timetable-popup-0"><span class="timetable-time">09:30 - 11:00</span><span class="timetable-name">Roger Hodgson</span></a><div id="timetable-popup-0" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-4">Roger Hodgson</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/roger_hodgson.jpg" alt="Roger Hodgson"></div><div class="timetable-time color-4">09:30 - 11:00</div><div class="timetable-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros.</div></div></div></div><div class="timetable-item"><span class="timetable-color color-1"></span><a class="timetable-title" href="#timetable-popup-10"><span class="timetable-time">15:00 - 17:30</span><span class="timetable-name">Musiq SoulChild - Grown &amp; Sexy 16</span></a><div id="timetable-popup-10" class="timetable-popup zoom-anim-dialog mfp-hide"><div class="popup-header color-1">Musiq SoulChild - Grown &amp; Sexy 16</div><div class="popup-body"><div class="timetable-image"><img src="admin/timetable/images/musiq_soulchild.jpg" alt="Musiq SoulChild - Grown &amp; Sexy 16"></div><div class="timetable-time color-1">15:00 - 17:30</div><div class="timetable-desc">Grown &amp; Sexy 16<br>
                                                    Musiq SoulChild and Avant<br>
                                                    <br>
                                                    Tickets:<br>
                                                    $55.00 - Row 1-5<br>
                                                    $45.00 - Row 6-13<br>
                                                    $35.00 - Row 14-20<br>
                                                    $20.00 - Row 21-25</div></div></div></div></div></div></div></div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="product-name">Tiva Timetable - Responsive Schedule PHP Script</div>
            <div>© 2016 by TivaTheme. All rights reserved.</div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $(document).ready(function() {
        // initialize popups on all table items
        $('.timetable-item').children('a')
            .magnificPopup({
                src: '#' + $(this).next().attr('id'),
                type: 'inline',
                mainClass: 'my-mfp-zoom-in', // this class is for CSS animation below
                removalDelay: 800
            });
    });
</script>


</body>
</html>