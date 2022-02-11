<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';


    // public function products()
    // {
    //     return $this->hasMany('App\Models\Product');//,'id','category_id'
    // }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category','parent_id')->with('parent');
    }

    public function child()
    {
        // recursively return all children
        return $this->hasOne('App\Models\Category', 'parent_id')->with('child');
    }


    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // This is method where we implement recursive relationship
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('categories');
    }


}
