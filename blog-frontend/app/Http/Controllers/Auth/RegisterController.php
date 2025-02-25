<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register'); // Kayıt formu sayfasını döndür
    }

    public function register(Request $request)
    {
        // Giriş verilerini doğrulama
        // $credentials = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        $response = Http::timeout(1000)->post("http://api_nginx/api/register", [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);


        // Başarıyla kayıt sonrası yönlendirme
        return redirect()->route('login')->with('success', 'Kayıt işlemi başarılı. Giriş yapabilirsiniz.');

        
        
    }
    
}
