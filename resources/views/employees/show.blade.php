@extends('employees.layout')
@section('content')


<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">employeeNumber : {{ $employees->employeeNumber }}</h5>
        <p class="card-text">lastName : {{ $employees->lastName	 }}</p>
        <p class="card-text">firstName : {{ $employees->firstName }}</p>
        <p class="card-text">extension : {{ $employees->extension }}</p>
        <p class="card-text">email : {{ $employees->email	 }}</p>
        <p class="card-text">officeCode : {{ $employees->office->city }}</p>
        <p class="card-text">jobTitle : {{ $employees->jobTitle }}</p>



  </div>

    </hr>

  </div>
</div>
