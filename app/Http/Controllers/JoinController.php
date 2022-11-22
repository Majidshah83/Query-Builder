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
    public function leftJoin()
    {
        $result=Db::table('users')->leftJoin('users_verify','users_verify.user_id','=','users.id')->get();
        return $result;

    }
    public function rightJoin()
    {
        $result=DB::table('users')->rightJoin('users_verify', 'users_verify.user_id','=','users.id')->get();
        return $result;
    }
    public function crossJoin()
    {
        $result=DB::table('users')->crossJoin('users_verify')->get();
        return $result;
    }
}
