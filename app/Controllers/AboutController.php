<?php

namespace App\Controllers;

use Framework\Controller;

class AboutController extends Controller
{
    public function index(): string
    {
        return view('about');
    }
}
