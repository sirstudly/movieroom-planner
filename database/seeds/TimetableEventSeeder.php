<?php

use Illuminate\Database\Seeder;
use App\TimetableEvent;

class TimetableEventSeeder extends Seeder
{
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
        for ($i = 0; $i < 20; $i++) {
            TimetableEvent::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'start_date' => $faker->dateTimeBetween('-1 week', '+1 week'),
                'start_time' => $faker->numberBetween(0, 23) . ':' . $faker->randomElement(['00', '30']),
                'duration_minutes' => $faker->randomElement([60, 90, 120, 150, 180])
            ]);
        }
    }
}
