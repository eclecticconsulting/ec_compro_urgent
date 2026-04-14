<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMilestone extends Model
{
    protected $fillable = [
        'year',
        'title',
        'description',
        'image_path',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'year' => 'integer',
        'sort_order' => 'integer',
        'is_active' => 'boolean',
    ];
}
