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
        $split_events = array();
        foreach ($events as $ev) {
            $event_end = new DateTime($ev->start_date);
            $ev_start_time = explode(':', $ev->start_time);
            $event_end->setTime(intval($ev_start_time[0]), intval($ev_start_time[1]));
            $event_end->add(new DateInterval("PT{$ev->duration_minutes}M"));
            $ev->end_time = $event_end->format('H:i');

            // for display purposes
            $ev->axis_start_time = $ev->start_time;
            $ev->axis_end_time = $ev->end_time;

            //TODO: add support for events that span more than one day
            // if event ends on a different day, split the event in twain
            // this assumes events can only be at most 24 hours in duration
            if ($event_end->format('d') != (new DateTime($ev->start_date))->format('d')) {
                $split_ev = new TimetableEvent;
                $split_ev->fill([
                    "title" => $ev->title . " cont'd",
                    "image_url" => $ev->image_url,
                    "start_date" => $event_end->format('Y-m-d'),
                    "start_time" => $ev->start_time,
                    "duration_minutes" => $ev->duration_minutes,
                    "event_type" => $ev->event_type,
                    "description" => $ev->description
                ]);
                $split_ev->axis_start_time = "00:00";
                $split_ev->axis_end_time = $ev->end_time;
                $split_ev->end_time = $ev->end_time;
                $ev->axis_end_time = "24:00";
                $split_events[] = $split_ev;
            }
        }
        foreach ($split_events as $ev) {
            $events->add($ev);
        }
        return $events;
    }
}
