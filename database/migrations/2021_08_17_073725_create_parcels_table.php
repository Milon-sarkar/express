<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_id');
            $table->string('cus_name');
            $table->string('phone');
            $table->string('address');
            $table->string('invoice_no');
            $table->string('barcode');
            $table->string('barcode_number');
            $table->string('product_weight');
            $table->string('catagory_id');
            $table->string('delivery_area');
            $table->string('Product_type');
            $table->string('cash_amount');
            $table->string('sell_amount');            
            $table->string('payamount');            
            $table->timestamps();
            $table->string('status')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcels');
    }
}
