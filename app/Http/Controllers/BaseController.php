<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Mail\verifEmailMailable;
use App\Mail\ResetPasswordMailable;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;
use JWTFactory;
use JWTAuthException;
class BaseController extends Controller
{
    private $appUrl;
        public function __construct()
    {
            $this->appUrl =  config('global.APP_URL');
        $this->user = new User;

    }
   
    public function inscription(request $request)
    {
        $this->validate($request, [
            
             'nom' => 'required|max:40',
             'prenom' => 'required|max:40',

           // 'nom' => 'required|regex:/^[a-zA-Z]+$/u|max:255',

           // 'prenom' => 'required|regex:/^[a-zA-Z]+$/u|max:255',


            'telephone'  => 'required|max:40|digits:8|unique:users',
          
            'email' => 'required|max:40|email|unique:users',
           
            'adresse' => 'required',
            'ville' => 'required',

            'password' => 'required|min:8|max:40',
       
    ]);

     

    $user = User::create([
        'email' =>request('email'),
        'role' => '1',
        'nom' => $request->get('nom'),
        'prenom' => $request->get('prenom'),
        'telephone' => $request->get('telephone'),
       'ville' => $request->get('ville'),
       'adresse' => $request->get('adresse'),
       'password' => Hash::make($request->get('password')),
    ]);
    
    
      // Mail::to($user->email)->send(new verifEmailMailable($user->token));
      $user->save(); 

   

        return $user;
       

        return $this->login(request());
    }



    public function login()
    {
        $credentials = request(['telephone', 'password']);
  
        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
  
        return $this->respondWithToken($token);
    }


    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
