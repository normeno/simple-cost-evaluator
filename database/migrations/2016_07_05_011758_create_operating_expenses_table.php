<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatingExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operating_expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rent');
            $table->integer('light');
            $table->integer('phone');
            $table->integer('mobile');
            $table->integer('internet');
            $table->integer('water');
            $table->integer('company_id')->unsigned();
            $table->timestamps();

            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('operating_expenses');
    }
}
