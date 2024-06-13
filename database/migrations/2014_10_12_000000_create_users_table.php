<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('admin');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->timestamps();
    
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('set null');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
