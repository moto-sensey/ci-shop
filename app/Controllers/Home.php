<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Главная страница',
        ];

        return view('index', $data);
    }
}
