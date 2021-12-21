<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackages extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'location', 'about', 'slug', 
        'language', 'featured_event', 'foods', 
        'departure_date','duration','type','price'
    ];
}