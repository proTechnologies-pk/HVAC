<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $fillable = [
        'title',
        'owner_name',
        'owner_id',
        'email',
        'contact_number',
        'address',
        'facebook',
        'twitter',
        'youtube',
        'instagram',
        'is_open',
    ];


}
