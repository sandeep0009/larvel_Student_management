@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Payment display Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $payments->name }}</h5>
        <p class="card-text">EnrollMent_no : {{ $payments->enrollment() }}</p>
        <p class="card-text">Paid Date : {{ $payments->paid_date }}</p>
        <p class="card-text">Amount : {{ $payments->Amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection