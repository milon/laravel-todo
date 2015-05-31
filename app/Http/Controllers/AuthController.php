<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function home(){
        return view('home');
    }

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(){

    }

}
