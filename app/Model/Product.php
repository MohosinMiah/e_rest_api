<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use app\Model\Review;

class Product extends Model
{
    
    public function reviews()
    {
        
        return $this->hasMany('app/Model/Review'); 
        
    }
}
