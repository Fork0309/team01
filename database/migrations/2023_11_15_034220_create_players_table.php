<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) 
        {
            $table->id()->comment('角色編號(主鍵)');
            $table->string('name')->comment('角色名稱');
            $table->string('profession')->comment('角色職業');
            $table->foreignId('world')->comment('所屬區域(外部鍵)');
            $table->foreign('world')
                  ->references('id')
                  ->on('worlds')
                  ->onDelete('cascade');
            $table->float('usage_rate')->unsigned()->comment('使用率');
            $table->float('winning_rate')->unsigned()->comment('勝率');
            $table->float('ban_rate')->unsigned()->comment('禁用率');
            $table->integer('skin_of_shapes')->unsigned()->comment('當前造型數量');
            $table->date('listing_date')->comment('上市時間');
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
        Schema::dropIfExists('players');
    }
}
