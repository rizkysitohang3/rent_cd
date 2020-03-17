<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'rate', 'quantity'
    ];

  /**
     * A product can have many rent transactions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    
    public function rentTransactions() 
    {
        return $this->hasMany('App\RentTransaction');
    }
}
