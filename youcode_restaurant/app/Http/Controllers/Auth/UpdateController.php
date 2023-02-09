<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function edit($id){
        return view('updateUser', [
            'user'=> User::findOrFail($id)
        ]);
    }

    public function update(array $data, $id)
    {
         $user = User::findOrFail($id);
         $user->name = $data['name'];
         $user->image = $data['email'];
         $user->password = Hash::make($data['password']);
         $user->save();
    }

}
