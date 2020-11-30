<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Login;

class Anything extends Controller
{
    public function index($login) {

        $result = DB::table('login')->where('login', $login)->value('login');

        
            return view('/login', ['login' => $result]);
    }
}