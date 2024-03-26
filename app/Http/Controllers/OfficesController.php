<?php

namespace App\Http\Controllers;
use App\Models\offices;
use Illuminate\Http\Request;

class OfficesController extends Controller
{
    public function index()
    {
        $offices = offices::all();
      return view ('offices.index')->with('offices', $offices);
        /*return view('offices.index');*/
    }


    public function create()
    {
        return view('offices.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        offices::create($input);
        return redirect('offices')->with('flash_message', 'Contact Addedd!');
    }


    public function show($id)
    {
        $office = offices::find($id);
        return view('offices.show')->with('offices', $office);
    }


    public function edit($id)
    {
        $office = offices::find($id);
        return view('offices.edit')->with('offices', $office);
    }


    public function update(Request $request, $id)
    {
        $office = offices::find($id);
        $input = $request->all();
        $office->update($input);
        return redirect('offices')->with('flash_message', 'Contact Updated!');
    }


    public function destroy($officeCode)
{
    // Pronađi klijenta prema officeNumber-u
    $office = offices::where('officeCode', $officeCode)->first();

    // Ako je pronađen klijent, obriši ga
    if ($office) {
        $office->delete();
        return redirect('offices')->with('flash_message', 'Contact deleted!');
    } else {
        return redirect('offices')->with('error_message', 'Contact not found!');
    }
}
}
