<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'description',
        'age',
        'gender',
        'experience',
        'freelance',
        'language',
        'email',
        'address',
        'image',
        'cv',
    ];
}
