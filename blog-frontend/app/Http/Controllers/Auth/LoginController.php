<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);

        $response = Http::timeout(1000)->acceptJson()->post("http://api_nginx/api/login", [
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $token = $response['token'];
        session(['token' => $token]);
        // Başarıyla kayıt sonrası yönlendirme
        // return redirect()->route('product')->with('success');
        return redirect('/product   ', 301, ['Authorization' => $token]);

        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('product'); // Giriş başarılı
        // }

        // return back()->withErrors([
        //     'email' => 'Giriş bilgileri yanlış.',
        // ]);
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        // session()->forget('token');
        // return redirect('http://localhost:8003');
        // $user = User::where('id',$request->user()->id)->first();
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // $user->tokens()->delete();
        // session()->forget('token');

        $user = Http::timeout(1000)->withToken(session('token'))->post("http://api_nginx/api/logout");
        if($user->successful())
        {
            session()->forget('token');
            return redirect('http://localhost:8003');
        }

        // // Çıkış yaptıktan sonra yönlendirme
        // if ($response->successful()) {
        //     return redirect('http://localhost:8003');
        // }
    }
}
