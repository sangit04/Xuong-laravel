<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatPrivate;
use App\Models\User;

class ChatController extends Controller
{
    public function postMessage(Request $req){
        broadcast(new ChatPrivate($req->user(), User::find('19'), $req->message));
    }
}