<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF(){
        $pdf = PDF::loadView('employee.sample')
        ->setPaper([0, 0, 1000, 792.00])
        ->setWarnings(false);
        return $pdf->download();
    }
}
