<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TipoClienteController extends Controller
{
    //

    public function index(Request $request)
    {

        return Tipo::all();

    }
}
