<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Orang;

class OrangController extends Controller
{

public function index()
{
$orang = \App\Orang::paginate(10);
return view('orang', compact('orang'));
}

}

