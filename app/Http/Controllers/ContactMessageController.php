<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;


class ContactMessageController extends Controller
{
    public function create()
    {
    	return view('frontend/pages/index');
    }

    public function store(Request $request)
    {
    	// $this->validate($request,[
    	// 	'name' => 'required',
    	// 	'lastname' => 'required',
    	// 	'email' => 'required|email',
    	// 	'phone' => 'required',
    	// 	'message' => 'required'

    	// ]); 
        //dd($request->all());
        Mail::send('emails.contact-message', ['data' => $request], function ($m) use ($request) {
        $m->from('web@pirano1913.com', 'Pirano1913');

        $m->to('info@pirano1913.com')->subject('Your Reminder!');
        });
        // Mail::send('emails.thanks-message', ['data' => $request], function ($m) use ($request) {
        //     $m->from('info@pirano1913.com', 'Pirano1913');
        //     $m->to($request->mail)->subject('Gracias por contáctarnos');
        // });

    }
}
