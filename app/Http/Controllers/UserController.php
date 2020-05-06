<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        return response()->json(User::get(), 200);
    }

    public function store(Request $request)
    {
        return response(User::create($request->all()), 201);
    }

    public function show(User $user)
    {
        return response()->json(User::find($user->id), 200);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function destroy(User $user)
    {
        return response($user->delete(), 204);
    }
}
