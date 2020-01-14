@extends('backendtemplate')
@section('content')

<div class="container col-md-8 offset-md-2 my-3">
	<div class="card shadow-lg">
		<div class="card-header">
			<b>Add Teacher</b>
		</div>
		@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
		<div class="card-body">
			<form method="post" action="{{route('teachers.update', $teacher->id)}}">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="{{$teacher->name}}">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea name="address" class="form-control">{{$teacher->address}}</textarea>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label>Subject</label>
					<select class="form-control" name="subject">
						<option>{{$teacher->subject}}</option>
						@foreach($subjects as $subject)
						<option>{{$subject->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Choose Degree</label>
					<select class="form-control" name="degree">
						<option>{{$teacher->degree}}</option>
						@foreach($degrees as $degree)
						<option>{{$degree->name}}</option>
						@endforeach
					</select>
				</div>
				</div>
				<div class="form-group">
					<label>Biography</label>
					<textarea name="biography" class="form-control">{{$teacher->biography}}</textarea>
				</div>				
				<input type="submit" value="Send" class="btn btn-outline-primary float-right">
			</form>
		</div>
	</div>
</div>

@endsection