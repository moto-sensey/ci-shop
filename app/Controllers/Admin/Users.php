<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function getUsers(): string
    {
        return view('index');
    }

    public function getUser($name): string
    {
        $user_name = ucfirst($name);
        echo "Product name: $user_name";
        return view('index');
    }
}