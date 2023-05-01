<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function creatUsers()
    {

        $data = [
            ['username' => 'Reza', 'password' => md5('2341')],
            ['username' => 'javad', 'password' => md5('5213')],
        ];

        User::insert($data);

        return view('createUsers');

    }


    public function getUserComments(Request $request)
    {
        $user = User::find(1);
        //return $user->getComments()->get();
        return view('comments',['comments'=>$user->getComments()->get()]);
    }


    public function getUsers(){
         $users= User::all();
         return view('users',['users' => $users]);
    }


}
