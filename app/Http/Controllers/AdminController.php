<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('adminpesananmasuk', [
            'resevasi' => \App\Models\Resevasi::all(),
        ]);
    }

    public function history() {
        return view('history', [
            'resevasi' => \App\Models\Resevasi::all(),
        ]);
    }
}
