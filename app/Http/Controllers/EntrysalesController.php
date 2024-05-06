<?php

namespace App\Http\Controllers;

use App\Models\EntrySales;
use Dotenv\Parser\Entry;
use Illuminate\Http\Request;

class EntrysalesController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'tgl_dok' => 'required|date',
            'gudang_id' => 'required',
            'pelanggan_id' => 'required',
            'barang_id' => 'required',
            'keterangan' => 'string'
        ]);

        EntrySales::create($validatedData);

        
        return to_route('home')
            ->withSuccess('Data Berhasil disimpan!!');
    }
}
