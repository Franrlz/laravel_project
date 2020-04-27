<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    public function view()
    {
        $riewRow = DB::select('SELECT * FROM tbl_insert');
        return view('views', ['viewReport'=> $rieRow]);
    }


}

