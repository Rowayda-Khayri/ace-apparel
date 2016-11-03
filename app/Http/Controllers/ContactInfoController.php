<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact_info;
use App\Hour;

use DateTime;
use Carbon\Carbon;


class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
//        $categories= Category::all();
        
        return view('admin.contactInfo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // delete old info
        
        $oldContact = Contact_info::orderBy('created_at', 'desc')->first();
//        $oldContact= Contact_info::find($oldContact->id);
        
        $oldContact->deleted_at = new DateTime();
        
        $oldContact->save();
        $oldContact->delete();
        // delete old hours
         
         
       // save  new contact info 

        $contact = new Contact_info;
        
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->facebook = $request->facebook;
        $contact->twitter = $request->twitter;
        
        $contact->save();
        
        // save new hours 
        
        $hours = new Hour;
        $hours->content = $request->hours;
        $hours->save();
        
//        return redirect('/admin/post/show');
        return "contact stored";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
