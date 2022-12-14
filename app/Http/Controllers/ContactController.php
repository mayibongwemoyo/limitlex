<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Contact;

use Mail;



class ContactController extends Controller

{

    public function contactForm()

    {

        return view('contactForm');

    }



    public function storeContactForm(Request $request)

    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'affi' => 'required',

            'number' => 'required|digits:10|numeric',

            'department' => 'required',

            'date' => 'required',

            'message' => 'required',

        ]);



        $input = $request->all();



        Contact::create($input);



        //  Send mail to admin

        Mail::send('contactMail', array(

            'name' => $input['name'],

            'email' => $input['email'],

            'affi' => $input['affi'],

            'number' => $input['number'],

            'department' => $input['department'],

            'date' => $input['date'],

            'message' => $input['message'],

        ), function($message) use ($request){

            $message->from($request->email);

            $message->to('admin@admin.com', 'Admin')->subject($request->get('subject'));

        });



        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);

    }

}
