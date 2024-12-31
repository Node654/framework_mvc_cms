<?php

namespace App\Controllers;

use Framework\Controller;

class HomeController extends Controller
{
    public function index(): string
    {
        return view('main');
    }
}
