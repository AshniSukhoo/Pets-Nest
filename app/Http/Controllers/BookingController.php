<?php

namespace App\Http\Controllers;

use Auth;
use App\Entity\Booking;
use Illuminate\Http\Request;
class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //force user to login to take appointment
        $this->middleware('auth')->only(['getGroomingForm', 'getVeterinaryForm']);
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
        $groomingForm = Booking::create([
            'user_id'           => Auth::user()->id,
            'subject'           => $request->input('grooming_subject'),
            'description'       => $request->input('grooming_description'),
            'appointment_date'  => $request->input('grooming_date'),
            'service_name'      => 'grooming',


        ]);

        // Go back to grooming appointment page
        return redirect(route('getGroomingForm'))->with([
            'success_message' => 'Your Appointment was successfully recorded.'
        ]);
    }

    /*
     * Loads te form for veterinary appointment
     */
    public function getVeterinaryForm()
    {
        //Load view  with form
        return view('bookings.veterinary-from');
    }

    /*
     * save data for veterinary form
     */
    public function saveVeterinaryForm(Request $request)
    {
        //set validation rules
        $this->validate($request, [
            'veterinary_subject'     => 'required',
            'veterinary_description' => 'required',
            'veterinary_date'        => 'required',
        ]);


        //save data in table
        $vetForm = Booking::create([
            'user_id'           => Auth::user()->id,
            'subject'           => $request->input('veterinary_subject'),
            'description'       => $request->input('veterinary_description'),
            'appointment_date'  => $request->input('veterinary_date'),
            'service_name'      => 'veterinary',

        ]);

        // Go back to veterinary appointment page
        return redirect(route('getVeterinaryForm'))->with([
            'success_message' => 'Your Appointment was successfully recorded.'
        ]);
    }
}
