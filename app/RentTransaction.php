<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class RentTransaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'product_id', 'user_id', 'rent_date', 'return_date', 'price', 'returned'
    ];

   /**
     * A post belongs to a user and product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
   
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
}
