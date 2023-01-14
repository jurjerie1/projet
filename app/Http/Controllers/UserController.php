<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show_profil(){
        $user = User::find(Auth::user()->id);
        return view('profil', compact('user'));
    }
}
