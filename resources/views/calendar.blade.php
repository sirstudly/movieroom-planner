<!DOCTYPE html>
<html>
<!-- Header -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tiva Timetable</title>

    <!------------ Assets for Tiva Timetable ------------->
    <!-- Timetable Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'/>

    <!-- Timetable CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/timetable.css')}}">

    <!-- Timetable JS Files -->
    <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{URL::asset('/js/timetable.js')}}"></script>
    <!--------------------------------------------------->

    <!-------------- CSS Files for example -------------->
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">

    <script type="application/javascript">
        jQuery(document).ready(function() { load_timetables('{{ env('APP_API_GET_EVENTS_URL') }}'); });
    </script>
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
                <p>Tiva Timetable is a responsive schedule calendar with clean and modern flat interface. It is very
                    easy to use yet gives plenty of features and styling options. You can use it for any kind of
                    schedule or events calendar.
                <div class="timetable-example">
                    <div class="tiva-timetable" data-view="week" data-mode="day" data-start="monday" data-header-time="hide"></div>
                </div>
            </div>

            <div class="section" id="features">
                <h2>Features</h2>
                <p>Tiva Timetable has many good features for your demand</p>
                <div class="features-list">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:0">
                        <img class="img-responsive" src="images/demo/tiva_timetable.png" alt="Tiva Timetable Features"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-tablet"></i>
                            </div>
                            <div class="features-content">
                                <h3>Fully Responsive</h3>
                                <p>Tiva Timetable is fully responsive and mobile friendly. It display fine on mobile
                                    devices.</p>
                            </div>
                        </div>
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-gear"></i>
                            </div>
                            <div class="features-content">
                                <h3>Easy To Setup</h3>
                                <p>It is so easy to use Tiva Timetable. Just include some css and js files, then display
                                    the calendar by html shortcode.</p>
                            </div>
                        </div>
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-paint-brush"></i>
                            </div>
                            <div class="features-content">
                                <h3>Easy To Customize</h3>
                                <p>There are options for you to customize the timetable like show/hide navigation, start
                                    on monday or sunday, ...</p>
                            </div>
                        </div>
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-dashboard"></i>
                            </div>
                            <div class="features-content">
                                <h3>Admin Panel</h3>
                                <p>There is admin panel for you to manage timetables (create new, edit, delete, ...) and
                                    users.</p>
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
                    <div id="tt-month" class="tiva-timetable" data-view="month" data-mode="day" data-start="monday"></div>
                </div>
            </div>

            <div class="section" id="weekly-view">
                <h2>Weekly View</h2>
                <p>Display all your timetables via week. You can use as day schedule (repeat on every week) or as
                    specific date (like monthly view).</p>
                <div class="timetable-example">
                    <div id="tt-week" class="tiva-timetable" data-view="week" data-start="monday"></div>
                </div>
            </div>

            <div class="section" id="list-view">
                <h2>List View</h2>
                <p>Display all your timetables on list. You can use as day schedule (repeat on every week) or as
                    specific date (like monthly view).</p>
                <div class="timetable-example">
                    <div id="tt-list" class="tiva-timetable" data-view="list" data-start="monday"></div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="product-name">Tiva Timetable - Responsive Schedule PHP Script</div>
            <div>© 2016 by TivaTheme. All rights reserved.</div>
        </div>
    </div>
</div>
</body>
</html>