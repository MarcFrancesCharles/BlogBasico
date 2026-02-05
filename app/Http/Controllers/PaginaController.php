<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{               //METOD INICI I CONTACTE
    public function inicio() {
        return "Bienvenido a la página de inicio";
    }
    public function contacto() {
        return "Página de contacto";
    }
}
