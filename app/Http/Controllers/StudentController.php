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


        //chuncking laravel
        DB::table('student')->orderBy('id')->chunk(2,function($students){
        echo "chunkcing data";
        echo '<br>';
        foreach($students as $std)
        {
            echo $std->name;
            echo '<br>';

        }
        return false;
        });


        //aggregates function
        $result=DB::table('student')->where('id','>',3)->count();
        $result=DB::table('student')->max('marks');
        $result=DB::table('student')->avg('marks');
        $result=DB::table('student')->min('marks');


        //Select Method

        $result=DB::table('student')->where('marks','>',700)->select('name','email')->get();
        $result=DB::table('student')->where('name', 'like','m%')->select('name')->get();
        $result=DB::table('student')->where('id','1')->orWhere('name','majid')->get();

//between or where between
        $result=DB::table('student')->whereBetween('id',[1,5])->orWhereBetween('marks',[700,900])->get();



// where date month day
   $result=DB::table('student')->whereDate('pass_date','2021-11-12')->orWhereMonth('pass_date',
   '11')->get();

//order by
$result=DB::table('student')->orderBy('marks','asc')->get();
$result=DB::table('student')->orderBy('marks','desc')->get();
         dd($result);

//insert
$result=DB::table('student')->insert([
  'name'=>'adnan',
  'email'=>'shahmajid50@gmail.com',
  'city'=>'mardan',
  'marks'=>30,
  'pass_date'=>'2021-11-12'
]);
//update
DB::table('student')->where('id',2)->update([
    'name'=>'khalid'
]);
//update or insert
DB::table('student')->where('id',2)->updateOrInsert([
   'name'=>'SADAM',
  'email'=>'sADAM50@gmail.com',
  'city'=>'KATLANG',
  'marks'=>50,
  'pass_date'=>'2024-11-12'
]);
//delete
$result=DB::table('student')->where('id','<',15)->delete();
dd($result);
}
}