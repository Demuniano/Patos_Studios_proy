<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class GraphsController extends Controller
{
    public function vapesChart()
    {
        $totalProducts = Product::count();
        $vapeProductsCount = Product::where('flavor', 'vape')->count();
        $vapePercentage = ($vapeProductsCount / $totalProducts) * 100;

        return view('products.productos', compact('vapePercentage'));
    }
}
