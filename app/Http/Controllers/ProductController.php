<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductsByTheme($theme)
{
    // Assuming you have an array of anime products
    $animeProducts = [
        ['Naruto', 'One Piece', 'Attack on Titan', 'Frerien', 'Wind Breaker']
    ];



    return view('products', ['products' => $animeProducts, 'theme' => $theme]);
}

}
