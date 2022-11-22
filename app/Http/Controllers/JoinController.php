<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JoinController extends Controller
{
    public function join()
    {
        $result=DB::table('users')->Join('users_verify','users.id','=','users_verify.user_id')->select('users.name','users_verify.user_id'
        )->get();
        return $result;
    }
}