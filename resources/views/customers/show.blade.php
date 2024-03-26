@extends('customers.layout')
@section('content')


<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $customers->customerNumber }}</h5>
        <p class="card-text">Address : {{ $customers->customerName }}</p>
        <p class="card-text">Phone : {{ $customers->contactLastName }}</p>
        <p class="card-text">Phone : {{ $customers->contactFirstName }}</p>
        <p class="card-text">Phone : {{ $customers->phone }}</p>
        <p class="card-text">Phone : {{ $customers->addressLine1 }}</p>
        <p class="card-text">Phone : {{ $customers->addressLine2 }}</p>
        <p class="card-text">Phone : {{ $customers->city }}</p>
        <p class="card-text">Phone : {{ $customers->state }}</p>
        <p class="card-text">Phone : {{ $customers->postalCode }}</p>
        <p class="card-text">Phone : {{ $customers->country }}</p>
        <p class="card-text">Phone : {{ $customers->salesRepEmployeeNumber }}</p>
        <p class="card-text">Phone : {{ $customers->creditLimit }}</p>



  </div>

    </hr>

  </div>
</div>
