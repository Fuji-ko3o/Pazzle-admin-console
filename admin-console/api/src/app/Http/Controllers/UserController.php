<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request){
        $user = User::findOrFail($request->user_id);
        return response()->json($user);
    }


}
