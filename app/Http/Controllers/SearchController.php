<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

class SearchController extends Controller
{
    public function search(Request $request) {
        // Get the search value from the request
        $search = $request->input('search');
        // Search in the name column from the drugs table
        $drugs = Drug::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
        $nav_search_active = 'active';
        // Return the search view with the resluts compacted
       return view('pages.search', compact('drugs', 'nav_search_active'));
    }
}
