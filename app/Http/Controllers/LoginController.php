<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Security\SecurityService;

class loginController extends Controller{
    public function index(Request $request)
    {
        //requests in order to get what user has been putted down in order to login
        //so we can check if they are right or not
        $username = $request->input('userUsername');
        $password = $request->input('userPassword');
        
        //create a user model which only needs a password and username
        $user = new User($username, $password,  null, null);
        
        //login authenticator to check the entry
        $loginAuthenticator = new SecurityService();
        
        //try to login the user's entry
        //if its good to go, the user starts a session
        if($loginAuthenticator->login($user))
        {
            return view('index');
        }
        //if the entry doesnt exist user fails to login
        return view('loginForm');

    }
    public function logout(){
        session_start();
        if(session_destroy()){
            return view('products');
        }
        return view('index');
    }
}
