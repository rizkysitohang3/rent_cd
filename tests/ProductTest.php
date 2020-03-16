<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
		/**
		 * [GET]  /products 
		 * 
		 * **/
		
    public function test_show_all_products(){
		
		
		$this->get("products",[]);
		$this->seeStatusCode(200);
		$this->seeJsonStructure([
			'data' => ['*' => [
				'title',
				'rate',
				'quantity'
				]
			]
			]);
		
		
		}
		
		/**
		 * [GET]  /products/{id} 
		 * 
		 * **/
    
    public function test_show_specified_product(){
		
		$this->get("products/1",[]);
		$this->seeStatusCode(200);
		$this->seeJsonStructure([
			'data' => [
				'title',
				'rate',
				'quantity'
				]
			
			]);
		
		
		
		}
		
		/**
		 * [PUT]  /products/{id} 
		 * 
		 * **/
		
	public function test_change_product_quantity(){
		$parameters = ['quantity' => 10 ];
		$this->put("products/1",$parameters);
		$this->seeStatusCode(200);
		$this->seeJsonStructure([
			'status',
			'message'
			
			]);
		
		
		}
		
		/**
		 * [POST]  /products/{id}/rent 
		 * 
		 * **/
		
	public function test_rent_product(){
		
		
		$this->post("products/1/rent",[]);
		$this->seeStatusCode(200);
		$this->seeJsonStructure([
			'status',
			'message'
			
			]);
		
		
		}
}
		
		

	

