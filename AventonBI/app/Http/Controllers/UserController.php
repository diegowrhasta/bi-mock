<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $user = User::all();
        $count = $user->count();
        if($count>=1){
                return $user;
        }
        else{
                return response()->json(['Message'=>'Not Found'],404);;
        }
    }
    public function show($id_user){
        $user = User::find($id_user);
        if(!$user){
            return response()->json(['Message'=>'Not Found'],404);
        }
        else{
            return $user;
        }  
    }
    public function store(Request $request){
        $user = $request->json()->all();
        $created = User::create($user);
        return $created;
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id); 
        $user->update($request->json()->all());
        return $user;
    }
    public function delete(Request $request, $id){
        $user = User::findOrFail($id);
        $user->delete();
        return 204;
    }
}
