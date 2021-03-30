<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('sponsor_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->string('logo');
            $table->date('date');
            $table->longText('address');
            $table->string('ref');
            $table->longText('body');
            $table->string('signature');
            $table->string('name');
            $table->string('company_organisation');
            $table->integer('phone_number');
            $table->string('email');
            $table->string('website_link');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
