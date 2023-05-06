<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
        $role=Auth::user()->role;

        // jika role dia merupakan user
        if ($role=='0'){

            return view('dashboard');
        }

        //jika role dia merupakan admin
        if ($role=='1'){

            return view('adminpesananmasuk');
        }

        else {

            return view('dashboard');
        }
   }
}
