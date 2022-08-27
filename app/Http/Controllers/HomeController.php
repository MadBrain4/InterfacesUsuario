<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function user(){
        $user = Auth::user();
        return response()->json($user);
    }
}
