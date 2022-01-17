<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DataTables;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $tickets = Ticket::all();
            return DataTables::of($tickets)
                ->addIndexColumn()
                ->addColumn('action-btn', function($row) {
                    return $row->id;
                })
                ->rawColumns(['action-btn'])
                ->make(true);
        }
        return view('admin.ticket.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createByCategory(Request $request, $id)
    {
        $categories = Category::select('id', 'name', 'price')->get();
        $get_category = Category::findOrFail($id);
      

        return view('admin.ticket.create_by_category', compact('categories', 'get_category'));
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ticket.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ticketSearch()
    {
        return view('admin.ticket.ticket_search');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       
        $user = Auth::user();
        $data = $request->all();
        $validation = Validator::make($data, [
            'unit_price' => 'required|max:200'
        ],[
            'unit_price.unique' => trans('error.unit_price')
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }

        $data['total_price'] = (int)$request->quantity * (int)$request->unit_price;
        $data['created_by'] = $user->id;
        $data['updated_by'] = $user->id;

        $ticketData = Ticket::create($data);

        return redirect()->route('ticket.index')->with([
            'success' => trans('ticket create successfully')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('admin.ticket.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $data = $request->all();
        $validation = Validator::make($data, [
            'unit_price' => 'required|max:100'
        ],[
            'unit_price.unique' => trans('error.unit_price')
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }
        $oldData = Ticket::find($id);
        $oldData['updated_by'] = $user->id;

        $oldData->update($data);

        return redirect()->route('ticket.index')->with([
            'success' => trans('Ticket updated successfully')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            try {
                $data = Ticket::find($id);
                $data->delete();
                return response()->json(['success' => 'place deleted']);
            } catch (Exception $e) {
                return response()->json([
                    'status' => 500,
                    'message' => $e->getMessage()
                ]);
            }
        }
    }
}
