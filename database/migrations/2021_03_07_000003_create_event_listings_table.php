<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventListingsTable extends Migration
{
    public function up()
    {
        Schema::create('event_listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_name');
            $table->longText('event_description');
            $table->string('language');
            $table->date('event_start_date');
            $table->date('event_end_date')->nullable();
            $table->string('eventsponsors')->nullable();
            $table->string('location');
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
