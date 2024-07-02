<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponTable extends Migration
{
    public function up()
    {
        Schema::create('respon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->constrained('tickets')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('respon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('respon');
    }
}