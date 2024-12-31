<?php

namespace App\Controllers;

use Framework\Controller;

class ContactController extends Controller
{
    public function index(): string
    {
        return view('contact');
    }
}
