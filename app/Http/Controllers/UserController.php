<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public $data=[];

    public function index(){
        // dd(123);
        $users = User::all();
        return view('user.lists', compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return ("success create user");
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('user.update', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $data = $request->all();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();
        return ("success update user");
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return ("success delete user");
    }
}
