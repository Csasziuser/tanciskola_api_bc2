<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable =['man_id', 'woman_id','dance'];

    public function man(){
        return $this->belongsTo(Man::class);
    }
    
    public function woman(){
        return $this->belongsTo(Woman::class);
    }
}
