<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class XmlController extends Controller
{
    public function gerarXML()
    {
        $dados = Animal::all();
        
        return response()->view('data-xml', ['registros' => $dados])
                         ->header('Content-Type', 'application/xml');
    }
}
