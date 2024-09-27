<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        $mail = Mail::raw($validatedData['message'], function ($message) use ($validatedData) {
            $message->from($validatedData['email'])
                ->to('info@nawatara.com') // Your email address where you want to receive the messages
                ->subject($validatedData['subject']);
        });

        // Return response
        if ($mail) {
            return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->back()->with('error', 'Pesan gagal dikirim, silahkan coba lagi!');
        }
    }
}
