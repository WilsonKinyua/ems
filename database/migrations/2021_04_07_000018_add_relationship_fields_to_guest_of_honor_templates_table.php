<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToGuestOfHonorTemplatesTable extends Migration
{
    public function up()
    {
        Schema::table('guest_of_honor_templates', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_3618123')->references('id')->on('users');
        });
    }
}
