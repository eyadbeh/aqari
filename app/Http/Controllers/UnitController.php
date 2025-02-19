<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        
        // Fetching only the required columns and applying search filter
        $units = Unit::select('title', 'description', 'price')
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('title', 'like', "%$query%")
                                    ->orWhere('description', 'like', "%$query%");
            })
            ->get();
        
        // Passing the data to the view
        return view('user.search', compact('units'));
    }


    public function initail(Request $request)
    {
        $query = $request->input('search');
        
        // Fetching only the required columns and applying search filter
        $units = Unit::select('title', 'description', 'price')
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('title', 'like', "%$query%")
                                    ->orWhere('description', 'like', "%$query%");
            })
            ->get();
        
        // Passing the data to the view
        return view('admin.search', compact('units'));
    }

    public function showOrderList()
    {
        $orders = Unit::with('transactions')->get();
        // $orders = Unit::with('transactions')->paginate(10);

        return view('admin.order_list', ['orders' => $orders]);
    }
}

// class UnitController extends Controller
// {
//     public function index()
//     {
//         // Fetching only the required columns
//         $units = Unit::select('title', 'description', 'price')->get();
        
//         // Passing the data to the view
//         return view('user.search', compact('units'));
//     }
// }