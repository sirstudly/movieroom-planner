<?php

namespace App\Http\Controllers;

use DateInterval;
use DateTime;
use App\TimetableEvent;

class TimetableEventController extends Controller
{
    public function index()
    {
        $events = TimetableEvent::all();
        foreach ($events as $ev) {
            $event_end = new DateTime($ev->start_date);
            $ev_start_time = explode(':', $ev->start_time);
            $event_end->setTime(intval($ev_start_time[0]), intval($ev_start_time[1]));
            $event_end->add(new DateInterval("PT{$ev->duration_minutes}M"));
            $ev->end_time = $event_end->format('H:i');
        }
        return $events;
    }
}
