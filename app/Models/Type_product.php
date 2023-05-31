<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    use HasFactory;
    protected $table = 'type_product';

    public function products(){
        return $this->hasMany("App\Product");
    }
}
