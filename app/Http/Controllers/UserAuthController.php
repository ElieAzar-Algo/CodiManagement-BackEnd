<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserValidator;


class UserAuthController extends Controller
{
    public function register(UserValidator $request)
    {
        $user = User::create([
             'user_first_name' => $request->user_first_name,
             'user_last_name' => $request->user_last_name,
             'email' => $request->email,
             'password' => $request->password,
             'cohort_code' => $request->cohort_code,
             'user_phone_number' => $request->user_phone_number,
             'user_emergency_number' => $request->user_emergency_number,
             'user_birth_date' => $request->user_birth_date,
             'user_nationality' => $request->user_nationality,
             'user_gender'    => $request->user_gender,
             'user_city' => $request->user_city,
             'user_address' => $request->user_address,
             'user_avatar' => $request->user_avatar,
             'user_discord_id' => $request->user_discord_id,
             'user_security_level' => $request->user_security_level,
             'active_inactive' => 1,
         ]);

        $token = auth()->guard('api')->login($user);

        return $this->respondWithToken($token);
    }

    public function login(Request $request)
    {
        $credentials = request([
        'email',
        'password',
        ]);
       //dd($credentials);

        if (! $token = auth()->guard('api')->attempt($credentials)) {
            return response()->json(['error' => 'Incorrect Email or Password'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->guard('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->guard('api')->factory()->getTTL() * 60,
            'user'=> auth()->guard('api')->id(),
            'status'=>200,
        ]);
    }
}
