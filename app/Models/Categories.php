<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Categories extends Model
{
    protected $table = "categories";
    public $fillable =["cate_name","description","slug"];
    public function comments(){
        return $this->hasMany('App\Models\Products');
    }
}
