<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectOrdersProducts extends Migration
{

    public function up()
    {
        Schema::create('order_product', function(Blueprint $table){
            $table->bigInteger('order_id');
            $table->bigInteger('product_id');
            $table->integer('amount')->default(1);
            
            $table->primary(['order_id','product_id']);
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
