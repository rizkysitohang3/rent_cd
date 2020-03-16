<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->date('rent_date');
            $table->date('return_date');
            $table->float('price',8,2);
            $table->boolean('returned');
            $table->timestamps();
        });
        
        Schema::table('rent_transactions',function($table){
				$table
				->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade');
				
				$table
				->foreign('product_id')
				->references('id')
				->on('products')
				->onDelete('cascade');
				
			
			}
        
        
        );
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent_transactions');
    }
}
