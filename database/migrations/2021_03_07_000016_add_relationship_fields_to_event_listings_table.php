<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEventListingsTable extends Migration
{
    public function up()
    {
        Schema::table('event_listings', function (Blueprint $table) {
            $table->unsignedBigInteger('event_category_id');
            $table->foreign('event_category_id', 'event_category_fk_3361348')->references('id')->on('event_categories');
        });
    }
}
