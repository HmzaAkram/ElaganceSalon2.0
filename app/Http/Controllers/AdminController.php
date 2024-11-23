<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{

   public function getUsers(){
       $users = DB::table('tbl_users')->get();
       return view('admin.user', ['myuser'=>$users]);
    // return $users;
   }
}
