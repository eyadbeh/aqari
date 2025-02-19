<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchFilter extends Model
{
    use HasFactory;

    protected $table = 'search_filters';

    protected $fillable = [
        'bedrooms', 'bathrooms', 'max_area', // Other fillable columns as needed
    ];

    // Define the relationship to Unit
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
}
