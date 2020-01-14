
@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h2>
		New Feedback Form
	</h2>feedbacks
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div class="container">
 <!--  <div class="row my-5"> -->
	<div class="card mb-12" >
    <form  method="post"action="{{route('feedbacks.update',$feedback->id)}}"enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">

    <label>Name</label>
      <input type="text" name="name" class="form-control"value="{{$feedback->name}}">
    </div>
    <select class="custom-select" name="guardian" value="{{$feedback->guardian}}">
  <option selected>Guardian</option>
  <option value="father">Father</option>
  <option value="mother">Mother</option>
  <option value="uncle">Uncle</option>
  <option value="anti">Anti</option>
</select>
   
<div class="form-group">
  <label for="comment">Message</label>
  <textarea class="form-control" rows="5" id="comment" name="message" value="{{$feedback->message}}"></textarea>
</div>
    <div class="form-group">

   <label>Profile</label>
      <input type="file" name="profile"><img src="{{asset($feedback->profile)}}" class="img-fluid">
      <input type="hidden" name="oldprofile"value="{{$feedback->profile}}">
    </div>
    <div class="form-group">
      <input type="submit" name="btnsubmit"class="btn btn-primary"value="Update">
    </div>
</form>
  </div>
 </div>
<!-- </div>
 --></div>
@endsection
