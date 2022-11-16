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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('image_path')->nullable();
            $table->string('email')->unique();
            $table->string('nid')->nullable();
            $table->string('phone')->unique();
            $table->string('gender')->nullable();
            $table->string('department')->nullable();
            $table->string('hall')->nullable();
            $table->string('bloodgroup')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('district')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('users_infos');
    }
};
