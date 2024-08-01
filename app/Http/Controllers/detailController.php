<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    //

    // step 1{

    //     create a seed for bearer token 
    //     create a file   php artisan make:seeder MySeeder
       
    //     use Illuminate\Support\Facades\DB;
    //     use Hash;
    //     class MySeeder extends Seeder
    //     {
    //         /**
    //          * Run the database seeds.
    //          */
    //         public function run(): void
    //         {
    //             //
        
    //             DB::table('users')->insert([
    //                 'name' => 'test',
    //                 'email' => 'test@test.com',
    //                 'password' => bcrypt('test123'),
    //             ]);
    //         }
    //     }
        
       
    //     DatabaseSeeder class code
       
    //     $this->call([
    //         MySeeder::class,
    //     ]);
    // }

    // now create a bearer Token

    // step 2{
    //     composer require tymon/jwt-auth 
    //     php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
    //     php artisan jwt:secret

    //     <?php

    //     namespace App\Models;
        
    //     use Illuminate\Foundation\Auth\User as Authenticatable;
    //     use Tymon\JWTAuth\Contracts\JWTSubject;
        
    //     class User extends Authenticatable implements JWTSubject
    //     {
    //         // Other user model properties and methods...
        
    //         /**
    //          * Get the identifier that will be stored in the subject claim of the JWT.
    //          *
    //          * @return mixed
    //          */
    //         public function getJWTIdentifier()
    //         {
    //             return $this->getKey();
    //         }
        
    //         /**
    //          * Return a key value array, containing any custom claims to be added to the JWT.
    //          *
    //          * @return array
    //          */
    //         public function getJWTCustomClaims()
    //         {
    //             return [];
    //         }
        
    //         /**
    //          * Generate a JWT token for the user.
    //          *
    //          * @return string
    //          */
    //         public function generateToken()
    //         {
    //             return auth()->login($this);
    //         }
    //     }

    //     config/auth.php
        
    //             'api' => [
    //     'driver' => 'jwt',
    //     'provider' => 'users',
    // ],

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
        
    //     if (!Auth::attempt($credentials)) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Check email or password',
    //         ], 400);
    //     }
        
    //             $token = JWTAuth::attempt($credentials);
    //             if (!$token) {
    //                 return response()->json([
    //                     'status' => 'error',
    //                     'message' => 'Unauthorized',
    //                 ], 401);
    //             }
            
    //             $user = JWTAuth::user();
        
    //             return response()->json([
    //                 'status' => 'success',
    //                 'user' => $user,
    //                 'authorisation' => [
    //                     'token' => $token,
                       
    //                     'type' => 'bearer',
    //                     'expires_in' => JWTAuth::factory()->getTTL()
    //                 ]
    //             ]);

    // }
    // }
}
