<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Man extends Model
{
    protected $fillable=['name','year','free','city'];

    public function partner(){
        return $this->hasOne(Partner::class);
    }
}
