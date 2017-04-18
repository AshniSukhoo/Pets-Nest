<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity\Contact;

class ContactController extends Controller
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
