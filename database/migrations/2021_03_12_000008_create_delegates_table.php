<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelegatesTable extends Migration
{
    public function up()
    {
        Schema::create('delegates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('secondname');
            $table->string('email');
            $table->string('company')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('type_of_attendee')->nullable();
            $table->string('payment_status')->nullable();
            $table->string("created_by_id")->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
