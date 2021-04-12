<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomsTable extends Migration
{
    public function up()
    {
        Schema::create('customs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('postal_address')->nullable();
            $table->string('city')->nullable();
            $table->string('country');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
