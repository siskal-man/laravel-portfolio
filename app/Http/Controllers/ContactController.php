<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'body' => 'required'
        ]);

        Mail::to('block-code@mail.ru')->send(new ContactMail($validated['name'], $validated['email'], $validated['body']));

        return $request->all();
    }
}
