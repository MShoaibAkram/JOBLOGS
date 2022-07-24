<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JobLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_logs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_id')->unsigned();
            $table->bigInteger('log_type')->unsigned();
            $table->string('content');
            $table->string('attached_url');
            $table->timestamps();
        });

        Schema::table('job_logs', function($table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        });

        Schema::create('job_log_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('note');
            $table->timestamps();
        });

        Schema::table('job_logs', function($table) {
            $table->foreign('log_type')->references('id')->on('job_log_types')->onDelete('cascade');
        });


        Schema::create('drawings', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->bigInteger('job_log_id')->unsigned();
            $table->string('attached_url');
            $table->string('note');
            $table->timestamps();
        });

        Schema::table('drawings', function($table) {
            $table->foreign('job_log_id')->references('id')->on('job_logs')->onDelete('cascade');
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
