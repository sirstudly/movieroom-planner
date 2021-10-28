<?php

namespace App\Http\Controllers;

use DateInterval;
use DateTime;
use App\TimetableEvent;
use Illuminate\Http\Request;

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

            // if event ends on a different day, split the event in twain
            // this assumes events can only be at most 24 hours in duration
            if ($event_end->format('d') != (new DateTime($ev->start_date))->format('d')) {
                $split_ev = new TimetableEvent;
                $split_ev->fill([
                    "title" => $ev->title . " cont'd",
                    "image_url" => $ev->image_url,
                    "owner" => $ev->owner,
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

    public function save_event(Request $request)
    {
        error_log("Title: $request->title");
        error_log("Author: $request->author");
        error_log("Description: $request->description");
        error_log("Event Date: $request->start_date");
        error_log("Event Time: $request->start_time");
        error_log("Duration: $request->duration");
        error_log("Event Type: $request->event_type");
        error_log( "SESSION ID: " . $request->session()->getId());
        $ev = new TimetableEvent([
            "title" => $request->title,
            "owner" => $request->author,
            "description" => $request->description,
            "start_date" => $request->start_date,
            "start_time" => $request->start_time,
            "duration_minutes" => $request->duration,
            "event_type" => $request->event_type
        ]);
        // save the "owner" to the session
        $request->session()->put("current_user", $request->author);
        try {
            $success = $ev->save();
            if ($success) {
                return ["message" => "Save successful.", "success" => true];
            }
            return ["message" => "Failed to save event.", "success" => false];
        }
        catch (Exception $ex) {
            error_log("Failed to save event: " . $ex->getMessage());
            return ["message" => $ex->getMessage(), "success" => false];
        }
    }
}
