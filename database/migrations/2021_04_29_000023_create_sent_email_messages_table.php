<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentEmailMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('sent_email_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sent_to_name');
            $table->string('sent_to_email');
            $table->string('subject');
            $table->longText('message');
            $table->longText('token')->nullable();
            $table->integer('read')->nullable()->default();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
