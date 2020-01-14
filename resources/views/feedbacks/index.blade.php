@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<h2>
		Feedbacks List
	</h2>
	<a href="{{route('feedbacks.create')}}"class="btn btn-secondary">Add New</a>

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Guardian</th>
				<th>Message</th>			
			
				<th colspan="3">Actions</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			@foreach($feedbacks as $feedback)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$feedback->name}}</td>
				<td>{{$feedback->guardian}}</td>
				<td>{{$feedback->message}}</td>
				
				

				<td><a class="btn btn-info detailModel"> Detail</a></td>

				<div class="modal" id="modal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>

				<td><a href="{{route('feedbacks.edit',$feedback->id)}}"class="btn btn-warning">Edit</a></td>
				<td><form method="post"action="{{route('feedbacks.destroy',$feedback->id)}}">
					@csrf
					@method('DELETE')
					<input type="submit" class="btn btn-danger"value="Delete">
					
				</form>
			</td>			
		</tr>
		@endforeach

	</tbody>		

</table>
</div>
<!-- <nav aria-label="Page navigation example"style="float: right;">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->
<!-- Button trigger modal -->

@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function () {
		$('.detailModel').click(function(){
      $('#modal').modal('show');
  })
    // body...
})

</script>
@endsection