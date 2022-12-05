<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'image',
        'paragraph1',
        'paragraph2',
        'paragraph3',
        'origin'
    ];
}
