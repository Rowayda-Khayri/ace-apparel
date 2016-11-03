<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact_info;
use App\Hour;
use App\Category;

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
       
        if($oldContact){ // if this is not the first record in db
            
            $oldContact->deleted_at = new DateTime();
        
            $oldContact->save();
        }
        
        
        //delete old hours
        
        $oldhours = Hour::orderBy('created_at', 'desc')->first();

        if($oldContact){ // if this is not the first record in db
            
            $oldhours->deleted_at = new DateTime();
        
            $oldhours->save();

        }
        
         
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
        
        return redirect('/admin/contactInfo/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contact = Contact_info::orderBy('created_at', 'desc')->first();
        $hours = Hour::orderBy('created_at', 'desc')->first();
                        
        
        return view('admin.contactInfo.show', compact('contact','hours'));
    }
    
    
     public function clientShow()
    {
        $contact = Contact_info::orderBy('created_at', 'desc')->first();
        $hours = Hour::orderBy('created_at', 'desc')->first();
        
        
        // to show blog categories in header
        $categories= Category::all();
        
        
        return view('contact', compact('contact','hours','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $contact = Contact_info::orderBy('created_at', 'desc')->first();
        $hours = Hour::orderBy('created_at', 'desc')->first();
                        
        
        return view('admin.contactInfo.edit', compact('contact','hours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $contact = Contact_info::orderBy('created_at', 'desc')->first();
        $hours = Hour::orderBy('created_at', 'desc')->first();
        
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->facebook = $request->facebook;
        $contact->twitter = $request->twitter;
        $contact->updated_at = new DateTime;
        $contact->save();
        
        $hours->content = $request->hours;
        $hours->save();
        

        return redirect('/admin/contactInfo/show');
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
