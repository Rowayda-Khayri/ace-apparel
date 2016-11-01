<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reply extends Model
{
    use SoftDeletes;
    
    public function comment(){
        
        return $this->belongsTo(App\Comment);
    }
    
}
