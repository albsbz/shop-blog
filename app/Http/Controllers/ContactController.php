<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact; 

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=Contact::first();
        return view('contact.main', compact('contact'));
    }

}
