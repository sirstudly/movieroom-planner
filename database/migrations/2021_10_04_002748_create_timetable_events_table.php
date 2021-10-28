<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetableEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetable_events', function (Blueprint $table) {
            $table->increments('id');
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';
            $table->string('title');
            $table->string('image_url')->nullable();
            $table->string('owner');
            $table->text('description');
            $table->date('start_date');
            $table->time('start_time');
            $table->string('event_type');
            $table->smallInteger('duration_minutes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetable_events');
    }
}
