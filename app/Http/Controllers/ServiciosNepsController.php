<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosNepsController extends Controller
{
    public function index()
    {
        $services= TbtServiciosNeps::all();
        return view('admin.servicios-neps.index', compact('services'));
    }

    public function create()
    {
        return view('admin.servicios-neps.create');
    }
}
