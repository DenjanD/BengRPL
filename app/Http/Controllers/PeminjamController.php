<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamController extends Controller
{
    public function index(Request $request){

        $list_peminjam = DB::table('tb_user')->get();
        return view('peminjam', ['list_peminjam' => $list_peminjam]);
    }

    public function add(Request $request){
        
    }

    public function edit(Request $request){

    }

    public function delete(Request $request){

    }
}
