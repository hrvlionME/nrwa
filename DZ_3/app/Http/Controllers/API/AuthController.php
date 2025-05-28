<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * @group Autentifikacija
     * Prijava korisnika
     *
     * Autentificira korisnika koristeći email i lozinku. Vraća informacije o korisniku i JWT/token.
     *
     * @bodyParam email string required Email korisnika. Example: user@example.com
     * @bodyParam password string required Lozinka korisnika. Example: password123
     *
     * @response 200 {
     *  "message": "Login successful",
     *  "user": {
     *    "id": 1,
     *    "name": "John Doe",
     *    "email": "john@example.com"
     *  },
     *  "token": "1|Hd7m..."
     * }
     * @response 401 {
     *  "message": "Invalid credentials"
     * }
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::guard('web')->user();
            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'message' => 'Login successful',
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ],
                'token' => $token
            ], 200);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }

    /**
     * @group Autentifikacija
     * Odjava korisnika
     *
     * Briše token sa strane klijenta. (Server ne održava sesiju kod Sanctuma.)
     *
     * @response 200 {
     *  "message": "Logout successful (client must forget credentials)"
     * }
     */
    public function logout(Request $request)
    {
        return response()->json([
            'message' => 'Logout successful (client must forget credentials)'
        ], 200);
    }
}
