<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSponsorTemplatesTable extends Migration
{
    public function up()
    {
        Schema::table('sponsor_templates', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_3553064')->references('id')->on('users');
        });
    }
}
