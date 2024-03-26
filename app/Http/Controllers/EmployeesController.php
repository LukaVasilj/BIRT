<?php

namespace App\Http\Controllers;
use App\Models\employees;
use Illuminate\Http\Request;
use App\Models\offices;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = employees::all();
      return view ('employees.index')->with('employees', $employees);
        /*return view('employees.index');*/
    }


    public function create()

        {
            $offices = offices::pluck('city', 'officeCode');
            return view('employees.create', compact('offices'));
        }



    public function store(Request $request)
    {
        $input = $request->all();
        employees::create($input);
        return redirect('employees')->with('flash_message', 'Contact Addedd!');
    }


    public function show($id)
    {
        $employee = employees::find($id);
        return view('employees.show')->with('employees', $employee);
    }


    public function edit($id)
{
    $employee = employees::find($id);
    $offices = Offices::all(); // Dohvati sve gradove
    $selectedCity = Offices::where('officeCode', $employee->officeCode)->value('city'); // Dobij trenutni grad za officeCode
    return view('employees.edit', compact('employee', 'offices', 'selectedCity'));
}

    public function update(Request $request, $id)
    {
        $employee = employees::find($id);
        $input = $request->all();

        // Pronađi odgovarajući officeCode prema odabranom gradu
        $office = Offices::where('city', $input['city'])->first();
        $input['officeCode'] = $office->officeCode;

        $employee->update($input);
        return redirect('employees')->with('flash_message', 'Employee updated!');
    }


    public function destroy($employeeNumber)
{
    // Pronađi klijenta prema employeeNumber-u
    $employee = employees::where('employeeNumber', $employeeNumber)->first();

    // Ako je pronađen klijent, obriši ga
    if ($employee) {
        $employee->delete();
        return redirect('employees')->with('flash_message', 'Contact deleted!');
    } else {
        return redirect('employees')->with('error_message', 'Contact not found!');
    }
}
}
