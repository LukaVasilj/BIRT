<?php

namespace App\Http\Controllers;
use App\Models\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function index()
    {
        $customers = customers::all();
      return view ('customers.index')->with('customers', $customers);
        /*return view('customers.index');*/
    }


    public function create()
    {
        return view('customers.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        customers::create($input);
        return redirect('customers')->with('flash_message', 'Contact Addedd!');
    }


    public function show($id)
    {
        $customer = customers::find($id);
        return view('customers.show')->with('customers', $customer);
    }


    public function edit($id)
    {
        $customer = customers::find($id);
        return view('customers.edit')->with('customers', $customer);
    }


    public function update(Request $request, $id)
    {
        $customer = customers::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('customers')->with('flash_message', 'Contact Updated!');
    }


    public function destroy($customerNumber)
{
    // Pronađi klijenta prema customerNumber-u
    $customer = customers::where('customerNumber', $customerNumber)->first();

    // Ako je pronađen klijent, obriši ga
    if ($customer) {
        $customer->delete();
        return redirect('customers')->with('flash_message', 'Contact deleted!');
    } else {
        return redirect('customers')->with('error_message', 'Contact not found!');
    }
}
}
