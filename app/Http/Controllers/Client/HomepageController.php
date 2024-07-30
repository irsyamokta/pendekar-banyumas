<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('client.page.homepage.homepage');
    }

    public function screening()
    {
        return view('client.page.screening.screening');
    }

    public function mandiri()
    {
        return view('client.page.mandiri.mandiri');
    }
}
