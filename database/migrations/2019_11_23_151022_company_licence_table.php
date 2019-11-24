<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyLicenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_licence', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->integer('licence_id')->unsigned()->nullable();
            $table->foreign('licence_id')->references('id')->on('licences');
            $table->timestamp('date_create');
            $table->timestamp('date_update');
            $table->timestamp('valid_until');
            $table->timestamp('grace_period');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_licence');
    }
}
