<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity\Contact;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load view  with form
        return view('contact-us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //set validations rules
        $this->validate($request, [
            'user_name'   => 'required',
            'email'       => 'required',
            'subject'     => 'required',
            'description' => 'required'
        ]);

        //save data in table
        $contactForm = Contact::create([
            'user_name'     => $request->input('user_name'),
            'email'         => $request->input('email'),
            'subject'       => $request->input('subject'),
            'description'   => $request->input('description'),

        ]);

        // Go back to contact page
        return redirect(route('contact-us.create'))->with([
            'success_message' => 'The form was successfully sent.'
        ]);


    }


}
