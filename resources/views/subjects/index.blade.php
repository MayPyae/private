@extends('backendtemplate')
@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Subject List</h1>
	<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<b class="m-0 text-primary">Subject</b>			
			<a href="{{route('subjects.create')}}" class="btn btn-outline-primary float-right">Add Subject</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th >No.</th>
							<th >Name</th>
							<th colspan="3">Action</th>
						</tr>
					</thead>
					
					<tbody>
						@php
						$i=1;
						@endphp
						@foreach($subjects as $subject)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$subject->name}}</td>
							<td><button class="btn btn-outline-primary">Detail</button></td>
							<td><a href="{{route('subjects.edit', $subject->id)}}" class="btn btn-outline-warning">Edit</a></td>
								<td>
								<form method="post" action="{{route('subjects.destroy',$subject->id)}}">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delect" class="btn btn-outline-danger">			
								</form>
							</td>    
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




@endsection