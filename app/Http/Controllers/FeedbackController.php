<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|min:3|max:32',
            'feedback'=>'required',
            'email'=>'required|email',
        ]);
        Mail::send('emails.feedback', $request->toArray(), function($message) {
                $message->to(env('MAIL_USERNAME'),'Shop_name')
                        ->subject('feedback');
                $message->from(env('MAIL_USERNAME'),'Shop_name');
        });
        return response()->json(['errors'=>$validator->errors()->all()]); 
    }
}
