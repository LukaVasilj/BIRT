
@extends('employees.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('employees') }}" method="post">
        {!! csrf_field() !!}

        <label>employeeNumber</label></br>
        <input type="text" name="employeeNumber" id="employeeNumber" class="form-control"></br>
        <label>lastName	</label></br>
        <input type="text" name="lastName" id="lastName" class="form-control"></br>
        <label>firstName</label></br>
        <input type="text" name="firstName" id="firstName" class="form-control"></br>
        <label>extension</label></br>
        <input type="text" name="extension" id="extension" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Office City</label><br>
<select name="officeCode" id="officeCode" class="form-control">
    @foreach($offices as $officeCode => $city)
        <option value="{{ $officeCode }}">{{ $city }}</option>
    @endforeach
</select><br>
        <label>reportsTo [ broj ] </label></br>
        <input type="text" name="reportsTo" id="reportsTo" class="form-control"></br>
        <label>jobTitle</label></br>
        <input type="text" name="jobTitle" id="jobTitle" class="form-control"></br>


        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
