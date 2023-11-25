<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function hello_world(): string
    {
        return view('hello_world');
    }
}
