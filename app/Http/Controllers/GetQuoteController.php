<?php

namespace App\Http\Controllers;

use App\Models\GetQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetQuoteController extends Controller
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
            'company_name' => 'required|max:200',
            'radio_one' => 'required|max:200',
            'radio_two' => 'required|max:200',
            'product_quantity' => 'required|max:200',
            'budget' => 'required|max:200',
            'delivery_period' => 'required|max:200',           
            'radio_three' => 'required|max:200',           
        ],[
            'first_name' => trans('error.name')
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }
        $get_quoteData = GetQuote::create($data);

        return redirect()->route('request_quote')->with([
            'success' => trans('Quote request submit successfully')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GetQuote  $getQuote
     * @return \Illuminate\Http\Response
     */
    public function destroy(GetQuote $getQuote)
    {
        //
    }
}
