<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index(){
        $items = Berita::all();
        return view('view',compact('items'));
    }
}
