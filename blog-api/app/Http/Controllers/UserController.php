<?php

namespace App\Http\Controllers;

use App\Models\User; // User modelini import edin
use App\Models\Product; // Product modelini import edin
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // import this for password hashing

class UserController extends Controller
{
    // Tüm kullanıcıları yükle
    public function loadAllUsers()
    {
        
    }

    public function loadAddUserForm()
    {

    }

    public function AddUser(Request $request)
    {
        
    }

    public function EditUser(Request $request)
    {
       
    }

    public function loadEditForm($id)
    {
        
    }

    public function deleteUser($id)
    {

    }
}
