<?php

namespace App\Http\Controllers\Adminer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
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
        $contacts=Contact::first();
        return view('admin2.contact', compact('contacts'));
    }
    
    public function update(Request $request)
    {
        $contacts=Contact::first();
             $this->validate($request, [
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'text'=>'required',
            'description'=>'required',
            'keywords'=>'required',
            'shorttext'=>'required',
            'shopname'=>'required',
            'mapsrc'=>'required'
        ]);
        $contacts->address=$request->address;
        $contacts->phone=$request->phone;
        $contacts->email=$request->email;
        $contacts->mapsrc=$request->mapsrc;
        $contacts->description=$request->description;
        $contacts->keywords=$request->keywords;
        $contacts->text=$request->text;
        $contacts->shorttext=$request->shorttext;
        $contacts->shopname=$request->shopname;
        $contacts->save();
        // return dd($request->text);
        return redirect('/admin2/settings')->with('success', 'Contacts Edited');
    }

}
