<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // For demonstration, using static products array
        $products = [
            ['id' => 1, 'name' => 'Product 1', 'description' => 'Description for product 1', 'price' => 100000],
            ['id' => 2, 'name' => 'Product 2', 'description' => 'Description for product 2', 'price' => 200000],
            ['id' => 3, 'name' => 'Product 3', 'description' => 'Description for product 3', 'price' => 300000],
        ];

        return view('catalog', compact('products'));
    }
}
