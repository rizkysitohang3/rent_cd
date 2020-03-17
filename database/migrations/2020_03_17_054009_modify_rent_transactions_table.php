<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyRentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rent_transactions', function (Blueprint $table) {
            //
            $table->date('return_date')->nullable()->change();
            $table->float('price',8,2)->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rent_transactions', function (Blueprint $table) {
            //
            $table->date('return_date')->change();
            $table->float('price',8,2)->change();
            
        });
    }
}
