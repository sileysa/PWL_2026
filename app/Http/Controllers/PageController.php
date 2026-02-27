<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Sileysa Faedatul Nuraini <br> NIM: 244107020231';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
