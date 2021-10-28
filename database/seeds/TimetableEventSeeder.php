<?php

use Illuminate\Database\Seeder;
use App\TimetableEvent;

class TimetableEventSeeder extends Seeder
{
    private function createEvent($title, $img_url, $owner, $start_date, $start_time, $duration_min, $event_type, $description)
    {
        TimetableEvent::create([
            "title" => $title,
            "image_url" => $img_url,
            "owner" => $owner,
            "start_date" => $start_date->format('Y-m-d'),
            "start_time" => "$start_time",
            "duration_minutes" => $duration_min,
            "event_type" => $event_type,
            "description" => $description
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        TimetableEvent::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few items in our database:
        $date_cur = new DateTime("first sunday of this month");
        $this->createEvent("Roger Hodgson", "images/demo/roger_hodgson.jpg", $faker->word,
            $date_cur, "09:30", 90, "4", $faker->paragraph);
        $this->createEvent("Musiq SoulChild - Grown & Sexy 16", "images/demo/musiq_soulchild.jpg", $faker->word,
            $date_cur, "15:00", 150, "1", 'Grown & Sexy 16<br />\r\nMusiq SoulChild and Avant<br />\r\n<br />\r\nTickets:<br />\r\n$55.00 - Row 1-5<br />\r\n$45.00 - Row 6-13<br />\r\n$35.00 - Row 14-20<br />\r\n$20.00 - Row 21-25');

        $date_cur->add(new DateInterval("P1D"));

        $events[] = $this->createEvent("Festival of Praise Tour", "images/demo/festival_of_praise_tour.jpg", $faker->word,
            $date_cur, "13:30", 150, "2", "HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br />\r\n<br />\r\nTickets:<br />\r\n$52.50 Row 1-5<br />\r\n$47.50 Row 6-13<br />\r\n$37.50 Row 14-20<br />\r\n$27.50 Row 21-25");

        $date_cur->add(new DateInterval("P2D"));

        $events[] = $this->createEvent("Musiq SoulChild - Grown & Sexy 16", "images/demo/musiq_soulchild.jpg", $faker->word,
            $date_cur, "10:00", 90, "1", "Grown & Sexy 16<br />\r\nMusiq SoulChild and Avant<br />\r\n<br />\r\nTickets:<br />\r\n$55.00 - Row 1-5<br />\r\n$45.00 - Row 6-13<br />\r\n$35.00 - Row 14-20<br />\r\n$20.00 - Row 21-25");
        $events[] = $this->createEvent("Lucha Libre", "images/demo/lucha_libre.jpg", $faker->word,
            $date_cur, "15:00", 180, "4", $faker->paragraph);

        $date_cur->add(new DateInterval("P3D"));

        $this->createEvent("Roger Hodgson", "images/demo/roger_hodgson.jpg", $faker->word,
            $date_cur, "15:00", 180, "3", $faker->paragraph);

        $date_cur->add(new DateInterval("P3D"));

        $this->createEvent("Roger Hodgson", "images/demo/roger_hodgson.jpg", $faker->word,
            $date_cur, "11:00", 60, "4", $faker->paragraph);
        $events[] = $this->createEvent("Musiq SoulChild - Grown & Sexy 16", "images/demo/musiq_soulchild.jpg", $faker->word,
            $date_cur, "13:00", 150, "1", "Grown & Sexy 16<br />\r\nMusiq SoulChild and Avant<br />\r\n<br />\r\nTickets:<br />\r\n$55.00 - Row 1-5<br />\r\n$45.00 - Row 6-13<br />\r\n$35.00 - Row 14-20<br />\r\n$20.00 - Row 21-25");

        $date_cur->add(new DateInterval("P1D"));

        $events[] = $this->createEvent("Lucha Libre", "images/demo/lucha_libre.jpg", $faker->word,
            $date_cur, "12:30", 90, "2", $faker->paragraph);

        $date_cur->add(new DateInterval("P3D"));

        $events[] = $this->createEvent("Festival of Praise Tour", "images/demo/festival_of_praise_tour.jpg", $faker->word,
            $date_cur, "16:00", 180, "3", "HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br />\r\n<br />\r\nTickets:<br />\r\n$52.50 Row 1-5<br />\r\n$47.50 Row 6-13<br />\r\n$37.50 Row 14-20<br />\r\n$27.50 Row 21-25");

        $date_cur->add(new DateInterval("P3D"));

        $events[] = $this->createEvent("Lucha Libre", "images/demo/lucha_libre.jpg", $faker->word,
            $date_cur, "10:20", 70, "1", $faker->paragraph);

        $date_cur->add(new DateInterval("P2D"));

        $this->createEvent("Roger Hodgson", "images/demo/roger_hodgson.jpg", $faker->word,
            $date_cur, "15:00", 150, "4", $faker->paragraph);
        $events[] = $this->createEvent("Lucha Libre", "images/demo/lucha_libre.jpg", $faker->word,
            $date_cur, "11:30", 90, "3", $faker->paragraph);

        $date_cur->add(new DateInterval("P2D"));

        $events[] = $this->createEvent("Festival of Praise Tour", "images/demo/festival_of_praise_tour.jpg", $faker->word,
            $date_cur, "14:30", 120, "2", "HEZEKIAH WALKER , ISRAEL HOUGHTON, REGINA BELLE, FRED HAMMOND, CASEY J, KAREN - CLARKE - SHEARD, COMEDIAN EARTHQUAKE<br />\r\n<br />\r\nTickets:<br />\r\n$52.50 Row 1-5<br />\r\n$47.50 Row 6-13<br />\r\n$37.50 Row 14-20<br />\r\n$27.50 Row 21-25");

        $date_cur->add(new DateInterval("P2D"));

        $events[] = $this->createEvent("Lucha Libre", "images/demo/lucha_libre.jpg", $faker->word,
            $date_cur, "10:30", 120, "3", $faker->paragraph);

        $date_cur->add(new DateInterval("P2D"));

        $this->createEvent("Roger Hodgson", "images/demo/roger_hodgson.jpg", $faker->word,
            $date_cur, "18:00", 60, "1", $faker->paragraph);
    }
}
