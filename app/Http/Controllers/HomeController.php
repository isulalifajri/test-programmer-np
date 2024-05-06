<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use App\Models\Gudang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = 'Tes Programmer Nippon Paint';
        $gudang = Gudang::all();
        $barang = Barang::all();
        $customer = Customer::all();
        return view('page.home', [
            'title' => $title,
            'gudangs' => $gudang,
            'barangs' => $barang,
            'customers' => $customer,

        ]);
    }
}
