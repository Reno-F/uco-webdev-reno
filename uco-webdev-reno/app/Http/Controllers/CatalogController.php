<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    function list(Request $request)
    {
        $products = Product::where(function($query) use ($request) {
            $query->where('name', 'like', '%'.$request->search.'%')
                ->orWhere('description', 'like', '%'.$request->search.'%');
        });

        if ($request->sort == 'name_az') {
            $products->orderBy('name', 'asc');
        } else if ($request->sort == 'name_za') {
            $products->orderBy('name', 'desc');
        } else if ($request->sort == 'lowest_price') {
            $products->orderBy('price', 'asc');
        } else if ($request->sort == 'highest_price') {
            $products->orderBy('price', 'desc');
        }

        $data['products'] = $products->get();

        return view('home', $data);
    }

    function detail(string $id, Request $request)
    {
        $data['product'] = Product::where('id', $id)->first();

        return view('detail', $data);
    }

    function about(Request $request)
    {
        return view('about');
    }
}
