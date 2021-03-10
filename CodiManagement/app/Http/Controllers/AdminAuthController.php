<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function register(Request $request)
    {
        $admin = Admin::create([
             'full_name'=> $request->full_name,
             'username' => $request->username,
             'email'    => $request->email,
             'password' => $request->password,
             'role_id'  => $request->role_id,
             'branch_id'=> $request->branch_id,
             'description'=>$request->description,
             'active_inactive'=>$request->active_inactive,


         ]);

        $token = auth()->guard('admins')->login($admin);

        return $this->respondWithToken($token);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->guard('admins')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->guard('admins')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->guard('admins')->factory()->getTTL() * 60
        ]);
    }
}
