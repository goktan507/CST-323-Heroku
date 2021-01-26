<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Security\SecurityService;

class registerController extends Controller
{
    public function index(Request $request)
    {
        //requesting the user's entry to the register form
        $userUsername = $request->input('usernameInput');
        $userName = $request->input('nameInput');
        $userEmail = $request->input('emailInput');
        $userPassword = $request->input('passwordInput');
        
        //creating a register model with all the information in it (username, firstname, lastname, email, password)
        $user = new User($userUsername, $userPassword, $userName, $userEmail);
        //register authenticator in order to check if the entries are safe and make sure our user is able to register to the website
        $registerAuthenticator = new SecurityService();
        //if the user is able to register, register the user
        if($registerAuthenticator->register($user)){
            return view('index');
        }    
        //if the user is not able to register, fail to register the user
        return view('registerForm');
                
                
    }
}
