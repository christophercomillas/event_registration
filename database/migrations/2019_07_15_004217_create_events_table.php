<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('EventID');
            $table->string('EventName');
            $table->string('EventLocation');
            $table->text('EventDescription');
            $table->integer('EventType');
            $table->date('EventDateStart');
            $table->date('EventDateEnd');
            $table->dateTime('EventRegistrationStart');
            $table->dateTime('EventRegistrationEnd');
            $table->integer('EventCreatedBy');
            $table->softDeletes();
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
        Schema::dropIfExists('events');
    }
}
