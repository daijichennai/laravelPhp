<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UsersController extends Controller
{
     public function index(){
        $users = DB::select('select * from userMaster');
        return view('userMaster.listUser',['users'=>$users]);
    }
}
