<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert(
            [
                'title' => 'aiglien in the land of dragon', 
                'rate' => 2.0,
                'quantity'=> 10
            ]
        );
        
        DB::table('products')->insert(
            [
                'title' => 'aiglien and the beast', 
                'rate' => 2.0,
                'quantity'=> 0
            ]
        );
        
        
        
    }

}
