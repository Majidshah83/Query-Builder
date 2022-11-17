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
        // Retriviving single and multiple row/column from table
        $result=DB::table('student')->where('city','mardan')->get();
        $result=DB::table('student')->where('id','>',2)->get();
        $result=DB::table('student')->where('id','>',2)->first();
        $result=DB::table('student')->where('marks','>',370)->get();
        $result=DB::table('student')->where('marks','>',370)->pluck('name');
        $result=DB::table('student')->where('marks','>',370)->value('name');

        return $result;
     }
}