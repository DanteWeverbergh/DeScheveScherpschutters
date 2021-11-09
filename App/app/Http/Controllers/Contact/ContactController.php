<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        ];


        Mail::to('deschevescherpschutters@gmail.com')->send(new ContactMail($details));
        Mail::to($details['email'])->send(new ContactMail($details));
        return back()->with('message_sent', 'Uw bericht is verstuurd! We proberen uw bericht zo snel mogelijk te behandelen.');
    }
}
