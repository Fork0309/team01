<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('world', function (Blueprint $table) 
        {
            $table->id()->autoIncrement()->unsigned()->comment('所屬區域編號(主鍵)');
            $table->string('region')->comment('區域');
            $table->string('rule')->comment('統治');
            $table->string('attitude')->comment('對於魔法的態度');
            $table->string('technology')->comment('科技水平');
            $table->string('environment')->comment('整體環境');
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
        Schema::dropIfExists('world');
    }
}
