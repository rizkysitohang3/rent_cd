<?php

namespace App\Http\Controllers;

use App\RentTransaction;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;


class RentTransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    
    public function getRentTransactions(Request $request){
			$rent_transactions = RentTransaction::all();
			return $rent_transactions;
			
		}
		
	public function returnRentTransaction(Request $request,$id){
			$rent_transaction = RentTransaction::find($id);
			
			
			if(!$rent_transaction->returned){
				
						$rent_transaction->returned = true;
						$rent_transaction->return_date= Carbon::today();
						$day_count = ceil(abs($rent_transaction->return_date-$rent_transaction->rent_date )  / 86400);
						$product = Product::find($rent_transaction->product_id);
						$rent_transaction->price = $day_count * $product->rate;
						$product->quantity =  $product->quantity  + 1;
						$product->save();
						$rent_transaction->save();
						$response_data = ['status'=>'success','message'=>'return success'];
						return response()->json($response_data);
						
				}else{
					
					$response_data = ['status'=>'failed','message'=>'transaction already returned or transaction not found'];
					return response()->json($response_data);
					
					}
		
			
		
		
		}
    
    
}
