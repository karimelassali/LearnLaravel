<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class AllUsers extends Controller

{
    //
    public function AllUsers(Request $request){
        User::create([
            'name' => $request->name,
        ]);
        return response()->json($users,201);
            
}
}