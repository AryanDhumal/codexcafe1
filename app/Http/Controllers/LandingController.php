<?php
// app/Http/Controllers/LandingController.php
namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }
}
