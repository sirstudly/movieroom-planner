<?php

namespace App\Http\Controllers;

use App\TivaDemoEvent;
use Illuminate\Http\Request;
use App\TimetableEvent;

class TimetableEventController extends Controller
{
    public function index()
    {
        $events = [];
        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Roger Hodgson",
            "image" => "roger_hodgson.jpg",
            "date" => "1",
            "month" => "9",
            "year" => "2020",
            "day" => "sunday",
            "start_time" => "09:30",
            "end_time" => "11:00",
            "color" => "4",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Musiq SoulChild - Grown & Sexy 16",
            "image" => "musiq_soulchild.jpg",
            "date" => "3",
            "month" => "9",
            "year" => "2020",
            "day" => "sunday",
            "start_time" => "15:00",
            "end_time" => "17:30",
            "color" => "1",
            "description" => "Grown & Sexy 16<br />\r\nMusiq SoulChild and Avant<br />\r\n<br />\r\nTickets:<br />\r\n$55.00 - Row 1-5<br />\r\n$45.00 - Row 6-13<br />\r\n$35.00 - Row 14-20<br />\r\n$20.00 - Row 21-25"
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Festival of Praise Tour",
            "image" => "festival_of_praise_tour.jpg",
            "date" => "4",
            "month" => "9",
            "year" => "2020",
            "day" => "monday",
            "start_time" => "13:30",
            "end_time" => "16:00",
            "color" => "2",
            "description" => "HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br />\r\n<br />\r\nTickets:<br />\r\n$52.50 Row 1-5<br />\r\n$47.50 Row 6-13<br />\r\n$37.50 Row 14-20<br />\r\n$27.50 Row 21-25"
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Musiq SoulChild - Grown & Sexy 16",
            "image" => "musiq_soulchild.jpg",
            "date" => "6",
            "month" => "9",
            "year" => "2020",
            "day" => "tuesday",
            "start_time" => "10:00",
            "end_time" => "11:30",
            "color" => "1",
            "description" => "Grown & Sexy 16<br />\r\nMusiq SoulChild and Avant<br />\r\n<br />\r\nTickets:<br />\r\n$55.00 - Row 1-5<br />\r\n$45.00 - Row 6-13<br />\r\n$35.00 - Row 14-20<br />\r\n$20.00 - Row 21-25"
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Lucha Libre",
            "image" => "lucha_libre.jpg",
            "date" => "6",
            "month" => "9",
            "year" => "2020",
            "day" => "tuesday",
            "start_time" => "15:00",
            "end_time" => "18:00",
            "color" => "4",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Roger Hodgson",
            "image" => "roger_hodgson.jpg",
            "date" => "9",
            "month" => "9",
            "year" => "2020",
            "day" => "tuesday",
            "start_time" => "15:00",
            "end_time" => "18:00",
            "color" => "3",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Roger Hodgson",
            "image" => "roger_hodgson.jpg",
            "date" => "12",
            "month" => "9",
            "year" => "2020",
            "day" => "wednesday",
            "start_time" => "11:00",
            "end_time" => "12:00",
            "color" => "4",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Musiq SoulChild - Grown & Sexy 16",
            "image" => "musiq_soulchild.jpg",
            "date" => "12",
            "month" => "9",
            "year" => "2020",
            "day" => "wednesday",
            "start_time" => "13:00",
            "end_time" => "15:30",
            "color" => "1",
            "description" => "Grown & Sexy 16<br />\r\nMusiq SoulChild and Avant<br />\r\n<br />\r\nTickets:<br />\r\n$55.00 - Row 1-5<br />\r\n$45.00 - Row 6-13<br />\r\n$35.00 - Row 14-20<br />\r\n$20.00 - Row 21-25"
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Lucha Libre",
            "image" => "lucha_libre.jpg",
            "date" => "14",
            "month" => "9",
            "year" => "2020",
            "day" => "thursday",
            "start_time" => "12:30",
            "end_time" => "14:00",
            "color" => "2",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Festival of Praise Tour",
            "image" => "festival_of_praise_tour.jpg",
            "date" => "17",
            "month" => "9",
            "year" => "2020",
            "day" => "thursday",
            "start_time" => "16:00",
            "end_time" => "19:00",
            "color" => "3",
            "description" => "HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br />\r\n<br />\r\nTickets:<br />\r\n$52.50 Row 1-5<br />\r\n$47.50 Row 6-13<br />\r\n$37.50 Row 14-20<br />\r\n$27.50 Row 21-25"
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Lucha Libre",
            "image" => "lucha_libre.jpg",
            "date" => "20",
            "month" => "9",
            "year" => "2020",
            "day" => "friday",
            "start_time" => "10:20",
            "end_time" => "11:30",
            "color" => "1",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Roger Hodgson",
            "image" => "roger_hodgson.jpg",
            "date" => "22",
            "month" => "9",
            "year" => "2020",
            "day" => "friday",
            "start_time" => "15:00",
            "end_time" => "17:30",
            "color" => "4",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Lucha Libre",
            "image" => "lucha_libre.jpg",
            "date" => "22",
            "month" => "9",
            "year" => "2020",
            "day" => "saturday",
            "start_time" => "11:30",
            "end_time" => "13:00",
            "color" => "3",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Festival of Praise Tour",
            "image" => "festival_of_praise_tour.jpg",
            "date" => "24",
            "month" => "9",
            "year" => "2020",
            "day" => "saturday",
            "start_time" => "14:30",
            "end_time" => "16:30",
            "color" => "2",
            "description" => "HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br />\r\n<br />\r\nTickets:<br />\r\n$52.50 Row 1-5<br />\r\n$47.50 Row 6-13<br />\r\n$37.50 Row 14-20<br />\r\n$27.50 Row 21-25"
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Lucha Libre",
            "image" => "lucha_libre.jpg",
            "date" => "26",
            "month" => "9",
            "year" => "2020",
            "day" => "monday",
            "start_time" => "10:30",
            "end_time" => "12:30",
            "color" => "3",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        $ev = new TivaDemoEvent;
        $ev->fill([
            "name" => "Roger Hodgson",
            "image" => "roger_hodgson.jpg",
            "date" => "28",
            "month" => "9",
            "year" => "2020",
            "day" => "saturday",
            "start_time" => "18:00",
            "end_time" => "19:00",
            "color" => "1",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros."
        ]);
        $events[] = $ev;

        return $events;
//        return TimetableEvent::all();
    }
}
