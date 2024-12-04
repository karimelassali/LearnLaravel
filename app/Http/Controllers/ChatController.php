<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    //
    public function index(){
        $allChats = Chat::all();
        return response()->json($allChats);
    }
}
