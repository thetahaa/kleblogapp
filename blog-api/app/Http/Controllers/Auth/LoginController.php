<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash as FacadesHash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request): JsonResponse
    { 
        $request->validate([ 
            'email' => 'required|string|email|max:255', 
            'password' => 'required|string|min:6', 
        ]); 
     
        $user = User::where('email', $request->email)->first(); 
     
        if (!$user) { 
            return response()->json([ 
                'message' => 'Kullanıcı bulunamadı.' 
            ], 404); 
        } 
     
        if (Hash::check($request->password, $user->password)) { 
            return response()->json([ 
                'message' => 'Şifre eşleşmiyor.' 
            ], 401); 
        } 
     
        $token = $user->createToken($user->name . '-Auth-Token')->plainTextToken; 
     
        return response()->json([ 
            'message' => 'Giriş başarılı.', 
            'token_type' => 'Bearer', 
            'token' => 'Bearer ' . $token 
        ], 200); 
    } 
     
    public function logout(Request $request)
    {
        $user = User::where('id',$request->user()->id)->first();
        if($user)
        {
            $user->tokens()->delete();
            return response()->json([
                'message' => 'Başarıyla Çıkış Yapıldı.',
            ],200);
        }
        else{
            return response()->json([
                'message' => 'Kullanıcı Bulunamadı.',
            ],401);
        }
    }
    // public function logout(Request $request) {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    
    //     // Çıkış yaptıktan sonra yönlendirme
    //     return redirect('http://localhost:8003');
    // }

    public function profile(Request $request)
    {
        if($request->user())
        {
            return response()->json([
                'message' => 'Profil Getirildi.',
                'data' => $request->user()
            ],200);
        }
        else{
            return response()->json([
                'message' => 'Kimliği Doğrulanmadı.',
            ],401);
        }
    }
}
