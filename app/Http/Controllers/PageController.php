<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Nindya Shafira Putri <br> NIM: 2341760059';
    }

    public function articles($id){
        return "Halaman Artikel dengan ID $id";
    }
}
