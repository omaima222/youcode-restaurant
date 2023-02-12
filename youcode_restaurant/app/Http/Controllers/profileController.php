<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\userUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function index(){
       return view('updateUser');
    }

    public function update(User $user,userUpdateRequest $request , $id)
    {   
        $user->findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Hash::make

        return redirect()->route('Dashboard.index');
    }
}
