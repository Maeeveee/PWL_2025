<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat datang';
    }

    public function about(){
        return 'Nama : rizal NIM : 2341720152';
    }

    public function articles($id){
        return 'Halaman artikel dengan ID '.$id;
    }
}
