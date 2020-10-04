<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function tambahHobi()
    {
        return view ('tambah');
    }
}
