@extends('offices.layout')
@section('content')


<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">




        <div class="card-body">
        <h5 class="card-title">officeCode : {{ $offices->officeCode }}</h5>
        <p class="card-text">city : {{ $offices->city	 }}</p>
        <p class="card-text">phone : {{ $offices->phone }}</p>
        <p class="card-text">addressLine1 : {{ $offices->addressLine1 }}</p>
        <p class="card-text">addressLine2 : {{ $offices->addressLine2	 }}</p>
        <p class="card-text">state : {{ $offices->state	 }}</p>
        <p class="card-text">country : {{ $offices->country }}</p>
        <p class="card-text">postalCode : {{ $offices->postalCode	 }}</p>
        <p class="card-text">territory : {{ $offices->territory }}</p>



  </div>

    </hr>

  </div>
</div>
