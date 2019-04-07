<?php

namespace App\Http\Controllers\LoginController;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\Middleware\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function showuserprofile(){
    	$user=User::find(\Auth::user()->id);
    	return view('Uasers.userprofile')->with(compact('user'));
    }

    function showplaceorder(){
    	return view('Uasers.placeorder');
    }
}
