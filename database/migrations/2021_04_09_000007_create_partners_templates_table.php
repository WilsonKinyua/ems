<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('partners_templates', function (Blueprint $table) {
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
            $table->string('phone_number')->nullable();
            $table->string('email');
            $table->string('website_link');
            $table->integer('created_by_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
