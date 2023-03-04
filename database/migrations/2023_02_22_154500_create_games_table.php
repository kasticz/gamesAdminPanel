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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedDecimal('gameScore',8,1);
            $table->unsignedInteger('length');
            $table->timestamp('releaseDate');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('developer_id');
            $table->unsignedBigInteger('user_id');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
