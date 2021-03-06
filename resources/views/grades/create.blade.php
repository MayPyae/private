@extends('backendtemplate')
@section('content')

<div class="container col-md-8 offset-md-2 my-3">
	<div class="card shadow-lg">
		<div class="card-header">
			<b>Add Grade</b>
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
			<form method="post" action="{{route('grades.store')}}">
				@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<input type="submit" value="Send" class="btn btn-outline-primary float-right">
			</form>
		</div>
	</div>
</div>

@endsection