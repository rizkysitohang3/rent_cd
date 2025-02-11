<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class TransactionTest extends TestCase
{
    
    /**
		 * [GET]  /transactions
		 * 
		 * **/
		 
    public function test_show_all_transactions(){
		
		
		$this->get("transactions",[]);
		$this->seeStatusCode(200);
		$this->seeJsonStructure([
			'*' => [
				'id',
				'user_id',
				'product_id',
				'rent_date',
				'returned'
				
				]
			
			]);
		
		
		}
		
		
		
    
		
		/**
		* [GET]  /transactions/{id}/return 
		 * 
		 * **/
		 
	public function test_return_unreturned_transaction(){
		
		
		$this->get("transactions/1/return",[]);
		$this->seeStatusCode(200);
		$this->seeJson([
			'status'=>'success'
			
			]);
		
		}

	public function test_return_returned_transaction(){
		
		
		$this->get("transactions/2/return",[]);
		$this->seeStatusCode(200);
		$this->seeJson([
			'status'=>'failed'
			
			]);
		
		}
	
}
