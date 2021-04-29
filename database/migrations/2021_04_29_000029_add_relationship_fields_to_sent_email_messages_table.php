<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSentEmailMessagesTable extends Migration
{
    public function up()
    {
        Schema::table('sent_email_messages', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_3800599')->references('id')->on('users');
        });
    }
}
