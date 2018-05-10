<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $img = [];
        if(isset($input['avatar'])) {
                    $file = $input['avatar'];
                    $fileName = uniqid('_customer') . '.' . $file->getClientOriginalName();
                    $filePath = 'images/customer/';
                    $fileUpload = $file->move(storage_path('app/public/' . $filePath), $fileName);
                    $fullPath = asset('storage/' . $filePath . $fileName);
                    $img[] = $fullPath;
            }
        $data['image'] = json_encode($img);
        $data['dob'] = date('Y/m/d H:i:s',strtotime($data['dob']));
        $customer = Customer::create($data);
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->except('_token');
        $img = [];
        if(isset($data['avatar'])) {
                    $file = $data['avatar'];
                    $fileName = uniqid('_customer') . '.' . $file->getClientOriginalName();
                    $filePath = 'images/customer/';
                    $fileUpload = $file->move(storage_path('app/public/' . $filePath), $fileName);
                    $fullPath = asset('storage/' . $filePath . $fileName);
                    $img[] = $fullPath;
            }
        $data['image'] = json_encode($img);
        $data['dob'] = date('Y-m-d H:i:s',strtotime($data['dob']));
        $customer = Customer::find($id);
        $customer->update($data);
        return redirect()->route('customers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
