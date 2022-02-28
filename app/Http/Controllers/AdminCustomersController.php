<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomersRequest;
use App\Customers;
use App\User;
use Illuminate\Support\Facades\Session;

class AdminCustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['customers'] = Customers::all();

        return view('admin.customers.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['users'] = User::arrayForSelect();

        return view('admin.customers.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomersRequest $request)
    {
        $formData = $request->all();
        if( Customers::create($formData) ) {
            Session::flash('message', 'Customers Details Collected Successfully');
        }
        return redirect()->route('admin.customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['customer'] = Customers::findOrFail($id);

        return view('admin.customers.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['customer'] = Customers::findOrFail($id);
        $this->data['users'] = User::arrayForSelect();

        return view('admin.customers.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomersRequest $request, $id)
    {
        $data = $request->all();

        $customer = Customers::findOrFail($id);

        $customer->user_id = $data['user_id'];
        $customer->name = $data['name'];
        $customer->phone = $data['phone'];
        $customer->updated_by = $data['updated_by'];
        $customer->email = $data['email'];
        $customer->address = $data['address'];
        $customer->service_query = $data['service_query'];
        $customer->description = $data['description'];
        $customer->remarks = $data['remarks'];
        $customer->date = $data['date'];
        
        if( $customer->save() ) {
            Session::flash('message', 'Details Updated Successfully');
        }

        return redirect()->route('admin.customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Customers::find($id)->delete() ) {
            Session::flash('message', 'Customer Deleted Successfully');
        }
        
        return redirect()->route('admin.customers');
    }
}
