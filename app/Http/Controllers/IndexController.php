<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class IndexController extends Controller
{
    // Index
    public function index(){
        return view('auth.login');
    }
}
