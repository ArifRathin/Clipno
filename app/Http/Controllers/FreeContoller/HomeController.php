<?php

namespace App\Http\Controllers\FreeContoller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showfreetrial(){
    	return view('clippino.trial');
    }
}
