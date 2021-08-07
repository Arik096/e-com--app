<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserContorller extends Controller
{
    protected function login(Request $request)
    {
        // return DB::table('users')
        //     ->where('email', $request->email)
        //     ->get();

        $user = User::where('email', $request->email)
            ->get()
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user', $user);
            return redirect(route('home'));
        } else {
            return "Username & Password Doesn't Match";
        }
    }
}
