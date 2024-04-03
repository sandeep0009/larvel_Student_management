@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Payments Page</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <label for="name">Enrollment No</label><br>
        <select name="enrollment_id" id="enrollment_id">
          @foreach($enrollments as $id => $enroll_no)
          <option value="{{$id}}">{{$enroll_no}}</option>
          @endforeach
        </select>
        <label for="paid_date">Paid date</label><br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"><br>
        <label for="amount">Amount</label><br>
        <input type="text" name="amount" id="amount" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
   
  </div>
</div>
 
@stop
