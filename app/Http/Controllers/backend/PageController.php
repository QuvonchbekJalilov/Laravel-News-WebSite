<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function adminDashboard()
    {
        if(auth()->user()->hasRole('admin')){
            return view('backend.admin');
        }else{
            return view('auth.errorpage');
        }
    }
}
