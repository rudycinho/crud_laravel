<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\User;

class UserController extends BaseController
{
    public function register(RegisterRequest $request){
        $request->merge([
            "password"=>bcrypt($request->input('password'))
        ]);
        $user = User::create($request->all());
        return $this->sendResponse($user,"USER CREATED",201);
    }

    public function login(LoginRequest $request){
        
        if(Auth::attempt($request->all())){
            $user = Auth::user();
        
            $result = [
                'token' => $user->createToken('myApp')->accessToken
            ];
            return $this->sendResponse($result,"LOG IN ",200);
        }else{
            return $this->sendError("UNAUTHORIZED",[],401);
        }
    }

    public function me(Request $request){
        $user = Auth::user();
        return $this->sendResponse($user,"User",200);
    } 

}
