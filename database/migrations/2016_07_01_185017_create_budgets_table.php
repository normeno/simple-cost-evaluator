<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('id');
            
            // General
            $table->float('tax')->default(0.19)->unsigned();
            $table->smallInteger('weeks')->unsigned();
            $table->smallInteger('days')->unsigned();
            $table->integer('hours')->unsigned();
            $table->integer('hours_cost')->unsigned();
            
            // Salaries
            $table->tinyInteger('executive_total')->unsigned();
            $table->integer('executive')->unsigned();
            $table->tinyInteger('project_manager_total')->unsigned();
            $table->integer('project_manager')->unsigned();
            $table->tinyInteger('designer_total')->unsigned();
            $table->integer('designer')->unsigned();
            $table->tinyInteger('programmer_total')->unsigned();
            $table->integer('programmer')->unsigned();

            // Operative Cost
            $table->integer('rent')->unsigned();
            $table->integer('light')->unsigned();
            $table->integer('phone')->unsigned();
            $table->integer('mobile')->unsigned();
            $table->integer('internet')->unsigned();
            $table->integer('water')->unsigned();

            // Variable Cost
            $table->integer('software')->unsigned();
            $table->integer('travel')->unsigned();
            $table->integer('audiovisual')->unsigned();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('budgets');
    }
}
