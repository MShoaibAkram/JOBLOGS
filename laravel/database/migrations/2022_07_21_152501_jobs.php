<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->bigInteger('company_id')->unsigned();
            $table->string('job_number');
            $table->bigInteger('job_status')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('jobs', function($table) {
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });


        Schema::create('job_status', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('status_class');
            $table->timestamps();
        });


        Schema::table('jobs', function($table) {
            $table->foreign('job_status')->references('id')->on('job_status')->onDelete('cascade');
        });


        Schema::create('job_attachments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_id')->unsigned();
            $table->string('attached_url');
            $table->string('note');
            $table->timestamps();
        });


        Schema::table('job_attachments', function($table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
