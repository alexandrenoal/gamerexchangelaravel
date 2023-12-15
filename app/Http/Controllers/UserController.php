<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function users(){ 
       
        $user = auth()->user();

        $users = User::all(); 
    
        return view('profile',['users' => $users]); 
    }
    
}
