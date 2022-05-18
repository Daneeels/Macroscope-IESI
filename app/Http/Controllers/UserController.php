<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //UPDATE
    public function edit(User $user)
    {
        
        return view('user.edit',[
            'user' => $user,
        ]);
    }

    public function update(Request $data)
    {
        
        
        $attr = $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required','alpha_num', 'min:3','max:25','unique:users,username,'.  auth()->id()],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. auth()->id()],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        auth()->user()->update([
            'name' => $data->name,
            'username' => $data->username,
            'email' => $data->email,
            'password' => Hash::make($data->password),
        ]);

        
        return redirect('dashboard')->with('success','Profil berhasil teredit :)');
    }

    //DELETE
    public function destroy()
    {
        auth()->user()->delete();
        return redirect('/');
    }
}

