<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Application;
use PDF;

class PDFMaker extends Controller
{
    function gen()
    {
        $pdf = App::make('dompdf.wrapper');
        $data = '<h1>Helllooo</h1> 2<h2>WOrld</h2>';
        $pdf->loadHTML($data);
        return $pdf->stream();
    }
}
