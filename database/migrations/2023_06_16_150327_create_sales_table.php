<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->float('price');
            $table->date('date');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->
            on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_supplier')->unsigned();
            $table->foreign('id_supplier')->references('id')->
            on('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_record')->unsigned();
            $table->foreign('id_record')->references('id')->
            on('records')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sales');
    }
}
