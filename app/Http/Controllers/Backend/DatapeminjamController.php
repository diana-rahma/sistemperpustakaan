<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatapeminjamController extends Controller
{
    public function datapeminjam() {
        return view('datapeminjam',);
    }
}
