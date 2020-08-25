<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('purchase_id');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('purchase_number');
            $table->date('purchase_date');
            $table->string('purchase_details');
            $table->string('item_information');
            $table->integer('stock_qauntity');
            $table->double('cartoons');
            $table->integer('item_cartoon');
            $table->integer('quantity');
            $table->float('rate');
            $table->float('total');
            $table->double('grand_total');
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
        Schema::dropIfExists('purchases');
    }
}
