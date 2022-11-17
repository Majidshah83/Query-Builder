<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function getstudent()
    {
        //Retriviving All Rows From table 
        $result=DB::table('student')->get();
        return $result;
     }
}