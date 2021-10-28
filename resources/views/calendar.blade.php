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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{URL::asset('/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{URL::asset('/js/timetable.js')}}"></script>
    <!--------------------------------------------------->

    <!-------------- CSS Files -------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">

    <script type="application/javascript">
        jQuery(document).ready(function() { load_timetables('{{ env('APP_API_GET_EVENTS_URL') }}'); });
        init_schedule();
    </script>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div class="header">
            <div class="header-big">Movie Room Schedule</div>
            <div class="header-small">Something interesting here??....{{ $session_id }}</div>
        </div>

        <div class="content">
            <div class="section">
                <h2>Introduction</h2>
                <p>Tiva Timetable is a responsive schedule calendar with clean and modern flat interface. It is very
                    easy to use yet gives plenty of features and styling options. You can use it for any kind of
                    schedule or events calendar.</p>

                <a id="timetable_add_entry_button" class="btn btn-primary" role="button" href="#timetable-add-entry">
                    Add New Event
                </a>

                <div id="timetable-add-entry" class="timetable-popup zoom-anim-dialog mfp-hide">
                    <div class="popup-header color-4">Add New Event</div>
                    <div class="popup-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row text-left">
                                <div class="col mb-3">
                                    <label for="validationTitle">Title</label>
                                    <input type="text" class="form-control" id="validationTitle" name="title" placeholder="My New Event" maxlength="20" required>
                                    <div class="invalid-feedback">
                                        A title is required!
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <label for="validationName">Name</label>
                                    <input type="text" class="form-control" id="validationName" name="author" placeholder="Who are you?" maxlength="16" value="{{$current_user}}" required>
                                    <div class="invalid-feedback">
                                        This is not optional!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row text-left">
                                <div class="col mb-3">
                                    <label for="validationDescription">Description</label>
                                    <textarea type="text" class="form-control" id="validationDescription" name="description" maxlength="255" required></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a brief description.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row text-left">
                                <div class="col-7 mb-3">
                                    <label for="validationDate">Date</label>
                                    <input type="date" class="form-control" id="validationDate" name="event_date" required>
                                    <div class="invalid-feedback">
                                        Please specify a date.
                                    </div>
                                </div>
                                <div class="col-5 mb-3">
                                    <label for="validationTime">Time</label>
                                    <input type="time" class="form-control" id="validationTime" name="event_time" required>
                                    <div class="invalid-feedback">
                                        Please set a time.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row text-left">
                                <div class="col-6 mb-3">
                                    <label for="validationDuration">Duration (minutes)</label>
                                    <input type="number" class="form-control" id="validationDuration" min="30" max="240" name="duration" value="60" required>
                                    <div class="invalid-feedback">
                                        Please enter how long you want to reserve the room for (in minutes)
                                        between 30 and 240 (4 hours).
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="event_type" value="private" id="event_type_private" required>
                                    <label class="form-check-label" for="event_type_private">
                                        Private Event (do not disturb)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="event_type" value="public" id="event_type_public" required checked>
                                    <label class="form-check-label" for="event_type_public">
                                        Public Event (anyone can join)
                                    </label>
                                </div>
                                <div class="invalid-feedback">
                                    You must select an event type.
                                </div>
                            </div>
                            <span id="ajax_response"></span>
                            <input id="hidden_submit" type="submit" style="display:none;">
                            <button class="btn btn-primary" type="button" onclick="save_event('{{ env('APP_API_SAVE_EVENT_URL') }}');">Create Event</button>
                        </form>
                    </div>
                </div>

                <div class="timetable-example" style="overflow-x: auto;">
                    <div class="tiva-timetable" style="min-width: 800px;" data-view="week" data-start="monday"></div>
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