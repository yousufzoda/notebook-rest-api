<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebooks', function (Blueprint $table) {
            $table->id()->comment('Идентификатор');
            $table->string('full_name')->index()->comment('ФИО');
            $table->string('company', 30)->comment('Компания')->nullable();
            $table->string('phone',16)->unique()->comment('Телефон');
            $table->string('email')->unique()->comment('Email');
            $table->string('birthday')->comment('Дата рождения')->nullable();
            $table->string('image')->comment('Фото')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notebooks');
    }
};
