<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myservice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'description',
    ];
}
