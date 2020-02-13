<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function listUsers()
    {
        //echo "Lista";
        //$user = new User();
        //$user->name = "brener";
        //$user->email = "brener@viotto.com";
        //$user->password = Hash::make(123);
       // $user->save();
      // $user = User::where('id', '=',1)->first();
        //dd($user);
      // return view('listUser', [
         //  'user' => $user
       //]);



       $users = User::all();

       return view('listUsers',[

           'users' => $users

       ]);

    }

    public function listUser(User $user){

        return view('listUser', [

            'user' => $user
        ]);

    }

    public function addUser(){

        return view('addUser');

    }

    public function store(Request $request){

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('list');

    }


   public function  editUser(User $user){

       return view('editUser',[

           'user' => $user

       ]);


    }

    public function edit(User $user,Request $request){

        $user->name = $request->name;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $user->email = $request->email;
        }

        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('list');


    }


    public function destroy(User $user){
        $user->delete();
        return redirect()->route('list');

    }


}
