<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
// use Mail;
use App\Mail\NotifyMail;
// use Illuminate\Support\Facades\Mail as FacadesMail;

class SendEmailController extends Controller
{
    public function index()
    {
        Mail::to('myboemoyo@gmail.com')->send(new NotifyMail());
        if (Mail::failures()){
            return response()->Fail('Sorry!Please try again later');
        }
        else{
            return response()->success ('Great!Succesfully send in your mail');

        }
        // $data = [
        //     'subject' => 'Mayibongwe Tutorial Mail',
        //     'body' => 'Hello This is email delivery'
        // ];
        // try{
        //     Mail::to('myboemoyo@gmail.com')->send(new NotifyMail($data));
        //     return response()->json(['Great check your mail box']);
        // }catch(Exception $th)
        // {
        //     return response()->json(['Sorry somethuing']);

        }

}


