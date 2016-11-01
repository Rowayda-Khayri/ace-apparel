<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    
    use SoftDeletes;
    
     public function post(){
        
        return $this->hasMany(App\Post);
    }
}
