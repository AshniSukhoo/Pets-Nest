<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //force user to login to take appointment
        $this->middleware('auth')->only(['getGroomingForm']);
    }

    /*
     * Return form for booking of grooming.
     */
    public function getGroomingForm()
    {
        //Load view  with form
        return view('bookings.grooming-form');
    }

    /*
     * save data of form grooming
     */
    public function saveGroomingForm(Request $request)
    {
        //set validation rules
        $this->validate($request, [
            'grooming_subject'     => 'required',
            'grooming_description' => 'required',
            'grooming_date'        => 'required',
        ]);
        //save data in table

        // Go back to grooming appointment page
        return redirect(route('getGroomingForm'))->with([
            'success_message' => 'Your Appointment was successfully recorded.'
        ]);
    }
}
