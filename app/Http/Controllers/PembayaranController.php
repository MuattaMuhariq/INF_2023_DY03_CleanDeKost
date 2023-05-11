<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function store(request $request)
    {
        $request->validate([
            'totalharga' => ['required', 'string', 'max:255'],
            'botolplastik' => ['required', 'string', 'max:255'],
            'botolkaca' => ['required', 'string', 'max:255'],
            'kertas' => ['required', 'string', 'max:255'],
            'besi' => ['required', 'string', 'max:255'],
            'diskon' => ['required', 'string', 'max:255'],
            'hargadiskon' => ['required', 'string', 'max:255'],
        ]);
        $bayar = new \App\Models\Pembayaran();
        // $bayar->store($request->all());
        $bayar->totalharga = $request->totalharga;
        $bayar->botolplastik = $request->botolplastik;
        $bayar->botolkaca = $request->botolkaca;
        $bayar->kertas = $request->kertas;
        $bayar->besi = $request->besi;
        $bayar->diskon = $request->diskon;
        $bayar->hargadiskon = $request->hargadiskon;
        
        $bayar->save();
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function pembayaran() {
        return view('RincianPembayaranUser', [
            'Pembayaran' => \App\Models\Pembayaran::all(),
        ]);
    }
}




