
@extends('offices.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('offices') }}" method="post">
        {!! csrf_field() !!}

        <label>officeCode</label></br>
        <input type="text" name="officeCode" id="officeCode" class="form-control"></br>
        <label>city	</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>addressLine1</label></br>
        <input type="text" name="addressLine1" id="addressLine1" class="form-control"></br>
        <label>addressLine2</label></br>
        <input type="text" name="addressLine2" id="addressLine2" class="form-control"></br>
        <label>state</label></br>
        <input type="text" name="state" id="state" class="form-control"></br>
        <label>country  </label></br>
        <input type="text" name="country" id="country" class="form-control"></br>
        <label>postalCode</label></br>
        <input type="text" name="postalCode" id="postalCode" class="form-control"></br>
        <label>territory</label></br>
        <input type="text" name="territory" id="territory" class="form-control"></br>


        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
