<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class PasswordController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'new_password_confirmation' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);
        
        $newPassword = $request['new_password_confirmation'];
        
        $user = $request->user();

        User::where('id', $user->id)->update(['password'=> Hash::make($newPassword)]);
        
    }

}
