<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatabukuController extends Controller
{
    public function databuku() {
        return view('databuku',);
    }
}
