<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ref');
            $table->longText('body');
            $table->string('name');
            $table->string('company_organisation');
            $table->integer('phone_number');
            $table->string('email');
            $table->string('website_link');
            $table->string('subject')->nullable();
            $table->date('date');
            $table->longText('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
