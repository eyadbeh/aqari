<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use App\Models\SearchFilter;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        // Fetch data separately from units and search_filters tables
        $units = Unit::select('title')->get();
        $searchFilters = SearchFilter::select('bedrooms', 'bathrooms', 'max_area')->get();

        // Pass data to the view
        return view('admin.favorites', compact('units', 'searchFilters'));
    }
}
