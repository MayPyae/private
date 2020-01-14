@extends('backendtemplate')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold  text-success">ကျောင်းအပ်ထားသောကျောင်းသားများ</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-muted">
             <tr class="text-muted">
              <th scope="col">No.</th>
              <th scope="col">Date</th>
               <th scope="col">Personal_ID</th>
              <th scope="col">Name</th>
              <th scope="col">NRC</th>
              <th scope="col">DOB</th>
              <th scope="col">Grade</th>
              <th scope="col">Subject</th>
              <th scope="col">G1</th>
              <th scope="col">NRC</th>
              <th scope="col">G2</th>
              <th scope="col">NRC</th>
              <th scope="col">Phone</th>
              <th scope="col">Address</th>
              <th scope="col">Profile</th>
               <th colspan="2">Actions</th>

            </tr>
          </thead>
          <tbody>
            @php
            $i = 1;
            @endphp

            @foreach($preregisters as $preregister)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$preregister->created_at}}</td>
              <td>{{$preregister->personal_id}}</td>
              <td>{{$preregister->namem}}</td>
              <td>{{$preregister->nrc_no}}</td>
              <td>{{$preregister->dob}}</td>
              <td>{{$preregister->grade}}</td>
              <td>{{$preregister->subject}}</td>
              <td>{{$preregister->g1_name}}</td>
              <td>{{$preregister->g1_nrc}}</td>
              <td>{{$preregister->g2_name}}</td>
              <td>{{$preregister->g2_nrc}}</td>
              <td>{{$preregister->phone}}</td>
              <td>{{$preregister->address}}</td>
              <td>{{$preregister->profile}}</td>
              
              

              
              

        <td><a href="{{route('preregisters.edit',$preregister->id)}}"class="btn btn-warning">Edit</a></td>
        <td><form method="post"action="{{route('preregisters.destroy',$preregister->id)}}">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-danger"value="Delete">
          
       
      </td> 
        
    </tr>
            
      </form>
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
