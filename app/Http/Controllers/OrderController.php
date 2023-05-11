<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Iluminate\Support\Facades\DB;

class OrderController extends Controller
{
    
    //untuk menampilkan data
    public function viewPage() {
        return view('reservasi');
    }

    
    //untuk memasukan data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'waktu' => ['required', 'string', 'max:255'],
            'tanggal' => ['required', 'string','max:255'],
            'NoHp' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
        ]);
        $order = new \App\Models\Resevasi();
        // $order->store($request->all());
        $order->nama = $request->nama;
        $order->waktu = $request->waktu;
        $order->tanggal = $request->tanggal;
        $order->NoHp = $request->NoHp;
        $order->alamat = $request->alamat;
        
        // dd($order->save());
        $order->save();
        
        // Order::create([
        //     'name' => $request->nama,
        //     'waktu' => $request->waktu,
        //     'tanggal' => $request->tanggal,
        //     'NoHp' => $request->NoHp,
        //     'alamat' => $request->alamat,
        // ]);
        //Setelah succes maka akan menampilkan pesan
        // session()->flash('success', 'Data Berhasil Ditambahkan');
        // session()->flash('error', 'Data Gagal Ditambahkan');

        return redirect()->route('history')->with('success', 'Data Berhasil Ditambahkan');
        // return ('data berhasil di tambahkan');
    }
}