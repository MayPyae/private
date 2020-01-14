@extends('backendtemplate')
@section('content')

<div class="container-fluid">

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="card shadow" style="">
    <div class="card-body">

      <form novalidate method="post" action="{{route('mentors.store')}}" enctype="multipart/form-data">
        @csrf
        

        <div class="row">

          <div class="form-group w-75 col-md-6">

            <label for="name" class="text-muted font-weight-bold">Mentor's Name</label>
            <input type="text" name="name" class="form-control mb-3" id="name">
            

            <label for="phone" class="text-muted font-weight-bold">Phone:</label>
            <input type="text" name="phone" class="form-control mb-3" id="phone" placeholder="">

          
          
              
              <label for="address" class="text-muted font-weight-bold">Address:</label>
              <textarea class="form-control" id="address" name="address" rows="2"></textarea>
              
              <label for="student_id" class="text-muted font-weight-bold">Student Name:</label>
            <input type="text" name="student_id" class="form-control mb-3" id="student_id" placeholder="">
              
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-success mb-2  btn-block">Save Mentor</button>
      </form>
    </div>
  </div>

  @endsection