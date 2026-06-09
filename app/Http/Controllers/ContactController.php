<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect('/contact')->with('success', 'Pesan berhasil dikirim!');
    }

    public function inbox()
    {
        $messages = Message::latest()->get();
        return view('inbox', compact('messages'));
    }
}
