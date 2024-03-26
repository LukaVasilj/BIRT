
@extends('customers.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('customers') }}" method="post">
        {!! csrf_field() !!}
        <label>customerNumber</label></br>
        <input type="text" name="customerNumber" id="customerNumber" class="form-control"></br>
        <label>customerName</label></br>
        <input type="text" name="customerName" id="customerName" class="form-control"></br>
        <label>contactLastName</label></br>
        <input type="text" name="contactLastName" id="contactLastName" class="form-control"></br>
        <label>contactFirstName</label></br>
        <input type="text" name="contactFirstName" id="contactFirstName" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>addressLine1</label></br>
        <input type="text" name="addressLine1" id="addressLine1" class="form-control"></br>
        <label>addressLine2</label></br>
        <input type="text" name="addressLine2" id="addressLine2" class="form-control"></br>
        <label>city</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>
        <label>state</label></br>
        <input type="text" name="state" id="state" class="form-control"></br>
        <label>postalCode</label></br>
        <input type="text" name="postalCode" id="postalCode" class="form-control"></br>
        <label>country</label></br>
        <input type="text" name="country" id="country" class="form-control"></br>
        <label>salesRepEmployeeNumber</label></br>
        <input type="text" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber" class="form-control"></br>
        <label>creditLimit</label></br>
        <input type="text" name="creditLimit" id="creditLimit" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>


    </form>

  </div>

@stop
