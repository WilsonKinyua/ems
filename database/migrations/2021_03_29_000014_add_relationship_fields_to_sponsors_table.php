<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSponsorsTable extends Migration
{
    public function up()
    {
        Schema::table('sponsors', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id');
            $table->foreign('created_by_id', 'created_by_fk_3553084')->references('id')->on('users');
        });
    }
}
