
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RentTransactionsTableSeeder extends Seeder
{
    public function run()
    {
        
			
		DB::table('rent_transactions')->insert(
            [
                
                'user_id' => 1,
                'product_id' => 1, 
                'rent_date' => Carbon::create('2020', '03', '10'),
                'returned' => false
                
            ]);
            
          
            
           
          DB::table('rent_transactions')->insert([ 
                
                'user_id' => 2,
                'product_id' => 1, 
                'rent_date' => Carbon::create('2020', '01', '01'),
                'return_date' => Carbon::create('2020', '01', '02'),
                'price' =>2.0,
                'returned'=> true
            ]
        );
        
        
    }

}


