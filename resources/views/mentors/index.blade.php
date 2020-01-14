@extends('backendtemplate')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold  text-success">ကျောင်းတွင်ရှိသော လက်ထောက်ဆရာ၊ ဆရာမ စာရင်းများ</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-muted">
              <th>No.</th>
            
              <th>Name</th>
              <th>Phone</th>
            
              <th>Address</th>
             <th>Student Name</th>
               <th colspan="3">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
            $i = 1;
            @endphp

            @foreach($mentors as $mentor)
            <tr>
              <td>{{$i++}}</td>
             
              <td>{{$mentor->name}}</td>
              <td>{{$mentor->phone}}</td>     
              <td>{{$mentor->address}}</td>
             <td>{{$mentor->student_id}}</td>
             
              
             


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

        <td><a href="{{route('mentors.edit',$mentor->id)}}"class="btn btn-warning">Edit</a></td>
        <td><form method="post"action="{{route('mentors.destroy',$mentor->id)}}">
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
           
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@endsection