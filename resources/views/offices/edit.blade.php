@extends('offices.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('offices/' .$offices->officeCode) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="officeCode" id="officeCode" value="{{$offices->officeCode}}" id="officeCode" />



        <label>city</label></br>
        <input type="text" name="city" id="city" value="{{$offices->city}}" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$offices->phone}}" class="form-control"></br>
        <label>addressLine1</label></br>
        <input type="text" name="addressLine1" id="addressLine1" value="{{$offices->addressLine1}}" class="form-control"></br>
        <label>addressLine2</label></br>
        <input type="text" name="addressLine2" id="addressLine2" value="{{$offices->addressLine2}}" class="form-control"></br>
        <label>state</label></br>
        <input type="text" name="state" id="state" value="{{$offices->state}}" class="form-control"></br>
        <label>country</label></br>
        <input type="text" name="country" id="country" value="{{$offices->country}}" class="form-control"></br>
        <label>postalCode</label></br>
        <input type="text" name="postalCode" id="postalCode" value="{{$offices->postalCode}}" class="form-control"></br>
        <label>territory</label></br>
        <input type="text" name="territory" id="territory" value="{{$offices->territory}}" class="form-control"></br>



        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>

  </div>
</div>

@stop
