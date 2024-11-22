<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    protected $fillable = [
        'user_id',
        'number_of_posts',
        'copper_posts',
        'silver_posts',
        'gold_posts',
        'copper_star_posts',
        'silver_star_posts',
        'gold_star_posts',
        'platinum_star_posts'
    ];

}
