<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    public function parent()
    {
        return $this->belongsTo('App\Models\Service','parent_id')->with('parent');
    }

    public function child()
    {
        // recursively return all children
        return $this->hasOne('App\Models\Service', 'parent_id')->with('child');
    }


    public function categories()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }

    // This is method where we implement recursive relationship
    public function children()
    {
        return $this->hasMany(Service::class, 'parent_id')->with('categories');
    }
}
