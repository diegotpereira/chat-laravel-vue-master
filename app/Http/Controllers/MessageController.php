<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessageCreated;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with(['user'])->get();

        return response()->json($messages);
    }
}