<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\Controller;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }

}
