<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\RentTransaction;
use App\User;
use Carbon\Carbon;

class ProductController extends Controller
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

    public function getProducts(Request $request){
			$product = Product::all();
			return $product;
		
		
		
		}
    
    public function getProduct(Request $request,$id){
			$product = Product::find($id);
			return $product;
		
			
		}
		
    public function updateProductStock(Request $request,$id){
			$newvalue = $request->input('quantity');
			$product = Product::where('id',$id)->update(['quantity' => $newvalue]);
			$response_data = ['status'=>'success','message'=>'update success'];
			return response()->json($response_data);
		
			
		}
    
    public function rentProduct(Request $request, $id){
		$user_id = $request->input('user_id');
		$user = User::find($user_id);
		$product = Product::find($id);
		if(!$product ){
			$response_data = ['status'=>'failed','message'=>'product not found'];
			return response()->json($response_data);
			}
		
		if(!$user ){
			$response_data = ['status'=>'failed','message'=>'user not found'];
			return response()->json($response_data);
			}
		
		
		
		if ($product->quantity > 0) {
				
				$product->quantity = ($product->quantity) - 1;
				$product->save();
				RentTransaction::create(['user_id'=> $user_id,'product_id'=>$product->id , 'rent_date' => Carbon::today(),'returned'=> false]);
				$response_data = ['status'=>'success','message'=>'rent success'];
				return response()->json($response_data);
			}else{
				
				$response_data = ['status'=>'failed','message'=>'product out of stock'];
				return response()->json($response_data);
				}
			
		
		
		}
    
    
}
