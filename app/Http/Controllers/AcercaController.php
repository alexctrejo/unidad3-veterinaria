<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AcercaController extends Controller
{
    /*
 *Devuelve la vista desde el menu Acerca
 *
 * @param void
 * @return \Illuminate\View\View
 */
    public function sobre_acerca():View
    {
        return view('acerca');
    }
}

