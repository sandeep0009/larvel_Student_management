@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' . $enrollment->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $enrollment->id }}" />
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="{{ $enrollment->name }}" class="form-control"><br>
        <label for="batch_id">Batch ID</label><br>
        <input type="text" name="batch_id" id="batch_id" value="{{ $enrollment->batch_id }}" class="form-control"><br>
        <label for="student_id">Student ID</label><br>
        <input type="text" name="student_id" id="student_id" value="{{ $enrollment->student_id }}" class="form-control"><br>
        <label for="join_date">Join Date</label><br>
        <input type="text" name="join_date" id="join_date" value="{{ $enrollment->join_date }}" class="form-control"><br>
        <label for="fee">Fee</label><br>
        <input type="text" name="fee" id="fee" value="{{ $enrollment->fee }}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
   
  </div>
</div>
 
@stop
