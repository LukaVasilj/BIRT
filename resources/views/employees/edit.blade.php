@extends('employees.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('employees/' .$employee->employeeNumber) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="employeeNumber" id="employeeNumber" value="{{$employee->employeeNumber}}" id="employeeNumber" />

        <label>lastName</label></br>
        <input type="text" name="lastName" id="lastName" value="{{$employee->lastName}}" class="form-control"></br>
        <label>firstName</label></br>
        <input type="text" name="firstName" id="firstName" value="{{$employee->firstName}}" class="form-control"></br>
        <label>extension</label></br>
        <input type="text" name="extension" id="extension" value="{{$employee->extension}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{$employee->email}}" class="form-control"></br>
        <label>City</label><br>
        <select name="city" id="city" class="form-control">
            @foreach($offices as $office)
                <option value="{{ $office->city }}" {{ $office->city == $selectedCity ? 'selected' : '' }}>
                    {{ $office->city }}
                </option>
            @endforeach
        </select><br>
        <label>reportsTo</label></br>
        <input type="text" name="reportsTo" id="reportsTo" value="{{$employee->reportsTo}}" class="form-control"></br>
        <label>jobTitle</label></br>
        <input type="text" name="jobTitle" id="jobTitle" value="{{$employee->jobTitle}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
