<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallas', function (Blueprint $table) {
            $table->integer('Meses');
            $table->string('-3', 10);
            $table->string('-2', 10);
            $table->string('-1', 10);
            $table->string('0', 10);
            $table->string('1', 10);
            $table->string('2', 10);
            $table->string('3', 10);
            $table->primary('Meses');
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
        Schema::dropIfExists('tallas');
    }
}
