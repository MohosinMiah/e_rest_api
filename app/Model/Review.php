<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use app\Model\Product;
class Review extends Model
{
    public function product()
    {
        
        return $this->belongsTo('app\Model\Product'); 
        
    }
}
