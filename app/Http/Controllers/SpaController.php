<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spa;
class SpaController extends Controller
{
    public function index()
    {
    	$spas = Spa::all();
    	return view ('spa', ['spas' => $spas]);
    }
}
