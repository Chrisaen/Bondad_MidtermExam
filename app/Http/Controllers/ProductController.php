<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome()
    {
        $products = [
            ['name' => 'Naruto', 'description' => 'A young ninja who seeks recognition from his peers.', 'price' => 10.00],
            ['name' => 'One Piece', 'description' => 'A story about pirates seeking the ultimate treasure.', 'price' => 15.00],
            ['name' => 'Attack on Titan', 'description' => 'Humanity\'s struggle against giant humanoid creatures.', 'price' => 12.00],
            ['name' => 'My Hero Academia', 'description' => 'A world where nearly everyone has superpowers, known as Quirks.', 'price' => 14.00],
            ['name' => 'Demon Slayer', 'description' => 'A young boy becomes a demon slayer to avenge his family.', 'price' => 16.00]
        ];

        return view('products.welcome', compact('products'));
    }
}
