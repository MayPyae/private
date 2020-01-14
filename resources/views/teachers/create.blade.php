@extends('backendtemplate')
@section('content')

<div class="container col-md-8 offset-md-2 my-3">
	<div class="card shadow-lg">
		<div class="card-header">
			<b>Add Mentor</b>
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
			<form method="post" action="{{route('teachers.store')}}"enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone No</label>
					<input type="text" name="phone" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea name="address" class="form-control"></textarea>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label>Subject</label>
					<select class="form-control" name="subject">
							<option>Choose Subject</option>
							@foreach($subjects as $subject)
							<option>{{$subject->name}}</option>
							@endforeach
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Degree</label>
					<select class="form-control" name="degree">
						<option>Choose Degree</option>
						@foreach($degrees as $degree)
						<option>{{$degree->name}}</option>
						@endforeach
					</select>
				</div>
				</div>
				<div class="form-group">
					<label>Biography</label>
					<textarea name="biography" class="form-control"></textarea>
				</div>	
				 <label for="profile">Teacher Profile</label>
            <input type="file" name="profile" class="form-control-file" id="profile">    			
				<input type="submit" value="Send" class="btn btn-outline-primary float-right">
			</form>
		</div>
	</div>
</div>

@endsection