<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;


class ContactMessageController extends Controller
{
    public function create()
    {
    	return view('frontend/pages/contact');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'lastname' => 'required',
    		'mail' => 'required|email',
    		'phone' => 'required',
    		'message' => 'required'

    	]);

    	Mail::send('mails.contact-message', [ 
    		'msg' => $request->message
    	], function($mail) use($request){
    		$mail->from($request->email);

    		$mail->to('info@pirano1913.com')->subject('Contact Message');
    	});

    	return redirect()->back()->with('flash_message', 'Thanks your for your message');
    }
}
