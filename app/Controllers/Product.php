<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function show($slug): string
    {
        $name = ucfirst($slug);
        echo "Product name: $name";
        return view('index');
    }
}
