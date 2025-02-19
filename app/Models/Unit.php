<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = [
        'title',
        'description',
        'price',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'unit_id', 'unit_id');
    }

    public function searchFilters()
    {
        return $this->hasMany(SearchFilter::class, 'unit_id', 'unit_id');
    }
}