<?php namespace App\Http\Controllers;

class PrintController extends Controller
{
    public function index()
    {
        $parameter = array();
        $parameter['param'] = "ula mami kit  uii!!";

        $pdf = \PDF::loadView('printView',$parameter);
        return $pdf->download('Curriculum.pdf');
    }
}