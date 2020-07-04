<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{

    public function user_register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'msg' => $validator->errors()
            ]);
        }

        $exist_user = User::where('email',$request->email)->first();
        if ($exist_user){
            return response()->json([
                'status' => 'error',
                'message' => 'Email Already Exist',
            ]);
        }else{
            $new_user = new User();
            $new_user->first_name = $request->first_name;
            $new_user->last_name = $request->last_name;
            $new_user->email = $request->email;
            $new_user->phone = $request->phone;
            $new_user->password = Hash::make($request->password);
            $new_user->save();
            $success['token'] =  $new_user->createToken('groceryApp')->accessToken;

            return response()->json([
                'status' => 'success',
                'message' => 'User Account Successfully Register',
                'access_token' =>  "Bearer ".$success['token'],
                'token_type' => 'Bearer',
            ]);
        }

    }

    public function user_login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'msg' => $validator->errors()
            ]);
        }


        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)){
            return response()->json([
                'status' => 'Unauthorised',
                'message' => 'These credentials do not match our records.'
            ],200);
        }else{
            $user = Auth::user();
            $success['token'] =  $user->createToken('groceryApp')->accessToken;
            return response()->json([
                'status' => 'success',
                'message' => 'User Successfully Login',
                'access_token' => "Bearer ".$success['token'],
                'token_type' => 'Bearer',
            ]);

        }

    }


}
