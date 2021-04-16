<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('postal_address')->nullable();
            $table->string('city')->nullable();
            $table->string('country');
            $table->integer('created_by_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
