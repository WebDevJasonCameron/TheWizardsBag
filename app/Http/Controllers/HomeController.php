<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /** Show Home Page
     *
     * @route GET "/"
     * @return View
     */
    public function index(): View
    {
        return view('home.index');
    }
}
