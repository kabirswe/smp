<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        $validation = Validator::make($data, [
            'first_name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'email' => 'required|max:200',
            'phone_number' => 'required|max:200',
            'mobile_number' => 'required|max:200',
            'radio_box' => 'required|max:200',
            'text_box' => 'required|max:200',
        ],[
            'first_name' => trans('error.name'),
            'last_name' => trans('error.name'),
            'email' => trans('error.name'),
            'phone_number' => trans('error.name'),
            'mobile_number' => trans('error.name'),
            'radio_box' => trans('error.name'),
            'text_box' => trans('error.name'),
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }
        $contactData = Contact::create($data);

        return redirect()->route('contact')->with([
            'success' => trans('Contact information send successfully')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
