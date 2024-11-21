<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }
        
    public function get(Request $request, $id){
        $user = User::where('id', $id)->first();
        return $user;
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:50',
            'surname' =>'required|string|max:50',
            'email'=>[
                'required',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            ],
        ]);
        return User::create($request->all());
    }
}
