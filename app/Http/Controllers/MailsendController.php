<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\ContactUS;

class MailsendController extends Controller
{
    public function contactSaveData(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'msg' => 'required'
        ]);
    
        ContactUS::create($request->all());

        \Mail::send('mailcontact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('msg')
        ), function($message) use ($request)
        {
            $message->replyTo($request->get('email'));
            $message->to('legumesdebelair@gmail.com', 'Admin')->subject($request->get('subject'));
        });
    
        return back()->with('success', 'Thanks for contacting us!');
    }
}
