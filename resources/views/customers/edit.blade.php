@extends('customers.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('customers/' .$customers->customerNumber) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="customerNumber" id="customerNumber" value="{{$customers->customerNumber}}" id="customerNumber" />
        <label>customerName</label></br>
        <input type="text" name="customerName" id="customerName" value="{{$customers->customerName}}" class="form-control"></br>
        <label>contactLastName</label></br>
        <input type="text" name="contactLastName" id="contactLastName" value="{{$customers->contactLastName}}" class="form-control"></br>
        <label>contactFirstName</label></br>
        <input type="text" name="contactFirstName" id="contactFirstName" value="{{$customers->contactFirstName}}" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$customers->phone}}" class="form-control"></br>
        <label>addressLine1</label></br>
        <input type="text" name="addressLine1" id="addressLine1" value="{{$customers->addressLine1}}" class="form-control"></br>
        <label>addressLine2</label></br>
        <input type="text" name="addressLine2" id="addressLine2" value="{{$customers->addressLine2}}" class="form-control"></br>
        <label>city</label></br>
        <input type="text" name="city" id="city" value="{{$customers->city}}" class="form-control"></br>
        <label>state</label></br>
        <input type="text" name="state" id="state" value="{{$customers->state}}" class="form-control"></br>
        <label>postalCode</label></br>
        <input type="text" name="postalCode" id="postalCode" value="{{$customers->postalCode}}" class="form-control"></br>
        <label>country</label></br>
        <input type="text" name="country" id="country" value="{{$customers->country}}" class="form-control"></br>
        <label>salesRepEmployeeNumber</label></br>
        <input type="text" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber" value="{{$customers->salesRepEmployeeNumber}}" class="form-control"></br>
        <label>creditLimit</label></br>
        <input type="text" name="creditLimit" id="creditLimit" value="{{$customers->creditLimit}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>

  </div>
</div>

@stop
