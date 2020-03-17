<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

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
			return ['status'=>'success','message'=>'update success'];
		
			
		}
    
    
    
    
}
