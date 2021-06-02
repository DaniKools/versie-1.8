<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return'toon een customers lijst hier';
        $customers = Customer::paginate(20);
        
        return view('customer.index', [
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        //
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
        $request->validate([
            'contact_name' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'profile_picture' => 'image'
        ]);

        if ($request->profile_picture) {
            $img_path = $request->profile_picture->store('public/pictures');
        }

        $customer = Customer::create([
            'profile_picture' => substr($img_path, strlen('public/')) ?? null,
            'contact_name' => $request->contact_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);


        return redirect()->route('customers.index')->with('status', 'Customer created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customer.show', [
            'customer' => $customer
        ]);
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
        //return 'dit is een customer edit page';

        $customer = Customer::findOrFail($id);

        return view('customer.edit', [
            'customer' => $customer
        ]);
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
        $customer = Customer::findOrFail($id);
        
        $request->validate([
            'contact_name' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $customer->update([
            'contact_name' => $request->contact_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        
        return redirect()->route('customers.show', $id)->with('status', 'Customer updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('customers.index')
            ->with('status', 'Customer succesvol verwijderd!');
    }
}
