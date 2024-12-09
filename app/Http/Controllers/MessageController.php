<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // validar formulario
        $validated =$request->validate([
            'nombre' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'content' => 'required|min:3',
        ]);

        Mail::to('santyrod@gmail.com')->send(new MessageReceived($validated));

        // se ejecuta despues de validar el formulario
        return $request;
    }
}
