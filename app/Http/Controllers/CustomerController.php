<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerFormRequest;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function index(){
        $customers = Customer::all();
        return view('customer.index',compact('customers'));
    }
    public function create(){
        return view('customer.create');
    }
    public function store(CustomerFormRequest $request){
        $data = $request->validated();

        $customer = Customer::create($data);
        return redirect('/pesanAdmin')->with('message', 'Customer Added Succesfully');
    }
    public function edit($customer_id){
        $customer = Customer::find($customer_id);
        return view('customer.edit',compact('customer'));
    }
    public function update(CustomerFormRequest $request,$customer_id){
        $data = $request->validated();

        $customer = Customer::where('id', $customer_id)->update([
            'ownerName' => $data['ownerName'],
            'storeName' => $data['storeName'],
            'typefood' => $data['typefood'],
            'address' => $data['address'],

        ]);
        
        return redirect('/customers')->with('message', 'Customer Update Succesfully');
    }

    public function destroy($customer_id){

        $customer = Customer::find($customer_id)->delete();

        return redirect('/customers')->with('message', 'Customer Delete Succesfully');
    }
}
