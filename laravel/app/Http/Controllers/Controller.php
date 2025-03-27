<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('login');
    }
    
    public function register() {
        return view('register');
    }
    
    public function updateUser() {
        return view('update');
    }
    
    public function listUser() {
        return view('list');
    }
    
    public function viewUser() {
        return view('view');
    }
}
