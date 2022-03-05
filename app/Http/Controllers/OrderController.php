<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables, Exception;
use Mail;
use App\Mail\OrderMail;
class OrderController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = Order::all();
            return DataTables::of($orders)
                ->addIndexColumn()
                ->addColumn('action-btn', function($row) {
                    return $row->id;
                })
                ->rawColumns(['action-btn'])
                ->make(true);
        }
        return view('admin.order.index');
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
        // dd($request->all());
        $data = $request->all();
        $validation = Validator::make($data, [
            'quantity' => 'required|max:10',
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'phone' => 'required|max:50',
            'comment' => 'required|max:50',
        ],[
            'quantity' => trans('error.name'),
            'name' => trans('error.name'),
            'email' => trans('error.name'),
            'phone' => trans('error.name'),
            'comment' => trans('error.name'),
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }
        $orderData = Order::create($data);
        $product = Product::where('id', $request->product_id)->first('slug');
        $details = [
            'title' => 'Mail from Gummyspecialists',
            'product' => $product->name,
            'quantity' => $orderData->quantity,
            'name' => $orderData->name,
            'email' => $orderData->email,
            'phone' => $orderData->phone,
            'comment' => $orderData->comment
        ];
        Mail::to('kabir.swe@gmail.com')->send(new OrderMail($details));
        return redirect()->route('product.details', $product->slug)->with([
            'success' => trans('Order Confirm successfully')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            try {
                $data = Order::find($id);
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
