<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers=null;
        if($request->has("search")){
            $customers=Customer::where('first_name', 'like', '%'.$request->input('search').'%')
            ->get();
        }
        else{
            $customers=Customer::all();
        }

        return view('customer.index',[
            'customers'=>$customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->first_name=$request->input('first_name');
        $customer->last_name=$request->input('last_name');
        $customer->email=$request->input('email');
        $customer->contact_no=$request->input('contact_no');
        $customer->status=($request->input('status')!==null);
        $customer->ipaddress=$request->ip();
        $customer->save();
        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findorFail($id);    
        return view('customer.edit',[
            'customer'=>$customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->first_name=$request->input('first_name');
        $customer->last_name=$request->input('last_name');
        $customer->email=$request->input('email');
        $customer->contact_no=$request->input('contact_no');
        $customer->status=($request->input('status')!==null);
        $customer->ipaddress=$request->ip();
        $customer->save();
        return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete($customer);
        return redirect('customer');
    }
}
