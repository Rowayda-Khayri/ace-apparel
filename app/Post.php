<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    
    use SoftDeletes;
    
     public function category(){
        
        return $this->belongsTo(App\Category);
    }
    
     public function comment(){
        
        return $this->hasMany(App\Comment);
    }
    
     public function author(){
        
        return $this->belongsTo(App\Author);
    }
    
}
