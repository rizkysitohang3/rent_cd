<?php

namespace App\Http\Controllers;

use App\RentTransaction;
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
    
    
}
