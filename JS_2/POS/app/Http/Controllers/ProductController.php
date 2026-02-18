<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage($type)
    {
        $catalog = [
            'snack' => ['Keripik', 'Kacang', 'Biskuit'],
            'drink' => ['Air Mineral', 'Es Teh', 'Jus Jeruk'],
            'meal' => ['Nasi Goreng', 'Mie Goreng', 'Soto'],
        ];

        $products = $catalog[$type] ?? [];

        return view('products.food-beverage', compact('type', 'products'));
    }
    public function beautyHealth()
    {
        $products = [
            'Sabun Mandi',
            'Shampoo',
            'Pelembab',
            'Lipstick',
        ];

        return view('products.beauty-health', compact('products'));
    }

    public function homeCare()
    {
        $products = [
            'Deterjen',
            'Pembersih Lantai',
            'Pengharum Ruangan',
            'Sapu',
        ];

        return view('products.home-care', compact('products'));
    }

    public function babyKid()
    {
        $products = [
            'Popok',
            'Susu Formula',
            'Mainan Anak',
            'Tisu Basah',
        ];

        return view('products.baby-kid', compact('products'));
    }
}
