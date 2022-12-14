<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $filable = [
        'user_id',
        'image_url',
        'title',
        'subtitle',
        'desc',
    ];
}
