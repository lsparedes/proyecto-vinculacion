<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hueso;

class EsqueletoController extends Controller
{
//nueva función
    public function mostrarEsqueleto()
    {
        //Obtiene TODOS los huesos de la base de datos
        $huesos = Hueso::all();

        // Transforma la colección en un objeto
        $huesosParaJs = $huesos->keyBy('identificador');

        return view('modelo-esqueleto', ['huesosData' => $huesosParaJs]);
    }
}
