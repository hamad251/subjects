<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('department');
            $table->string('purpose')->nullable();
            $table->string('category');
            $table->string('is_it_urgent')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_it_board_powers')->default(0)->nullable();
            $table->string('is_it_board_powers_text')->nullable();
            $table->boolean('is_it_related')->default(0)->nullable();
            $table->boolean('is_it_financial_related')->default(0)->nullable();
            $table->boolean('is_it_market_effect')->default(0)->nullable();
            $table->boolean('is_it_edit_related')->default(0)->nullable();
            $table->boolean('is_it_decision_related')->default(0)->nullable();
            $table->boolean('is_it_public')->default(0)->nullable();
            $table->boolean('is_it_related_to_old_subject')->default(0)->nullable();
            $table->integer('time')->nullable();
            $table->boolean('is_it_department_related')->default(0)->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
