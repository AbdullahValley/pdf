<?php

namespace App\Http\Controllers;

use PDF;

class PdfController extends Controller
{
    public function index(){

        $data = ['key'];

        $pdf = PDF::loadView('pdf', compact('data'));
        return $pdf->stream('file.pdf');
    }


    public function export(){

        $data = ['key'];

        $pdf = PDF::loadView('pdf', compact('data'));
        return $pdf->download('file.pdf');
    }

}
