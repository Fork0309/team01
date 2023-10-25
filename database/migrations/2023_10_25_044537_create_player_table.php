<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) 
        {
            $table->id()->autoIncrement()->unsigned()->comment('角色編號(主鍵)');
            $table->string('name')->comment('角色名稱');
            $table->string('profession')->comment('角色職業');
            $table->tinyInteger('world')->unsigned()->comment('所屬區域(外部鍵)');
            $table->float('usage rate')->unsigned()->comment('使用率');
            $table->float('winning rate')->unsigned()->comment('勝率');
            $table->float('ban rate')->unsigned()->comment('禁用率');
            $table->integer('skin of shapes')->unsigned()->comment('當前造型數量');
            $table->date('listing date')->comment('上市時間');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player');
    }
}
