@extends('backendtemplate')
@section('content')

  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Name</h3>
      </div>
      <div class="card-body">
        <!-- <div class="row">
          
          <div class="col-md-9"> -->
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6 ">
                    <h5>Name:</h5>
                    <h6>Personal ID:</h6>
                    <h6>Grade:</h6>
                    <h6>Subject:</h6>
                    <h6>Father Name:</h6>
                    <h6>Mother Name:</h6>
                    <h6>Address:</h6>
                  
                  </div>
                 
                    <div class="col-md-6">
                  @foreach($preregisters as $preregister)
                  <h5>{{$preregister->namem}}</h5>

                  <h6>{{$preregister->personal_id}}</h6>


                  <h6>{{$preregister->grade}}</h6>
                  <h6>{{$preregister->subject}}</h6>
                  <h6>{{$preregister->g1_name}}</h6>

                  <h6>{{$preregister->g2_name}}</h6>


                  <h6>{{$preregister->address}}</h6>

                  @endforeach
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div><hr>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-dark">
              <th>စာမေးပွဲ</th>
              <th>မြန်မာ</th>
              <th>English</th>
              <th>သချာ</th>
              <th>ဓါတု</th>
              <th>ရူပ</th>
              <th>ဇီဝ</th>
              <th>စီးပွားရေး</th>
              <th>စုစုပေါင်း</th>
            </thead>
            <tbody>
              <tr>
                <td>First Exam</td>
                <td>55</td>
                <td>45</td>
                <td>50</td>
                <td>74</td>
                <td>90</td>
                <td>90</td>
                <td>-</td>
                <td>404 မှတ်</td>
              </tr>
              <tr>
                <td>Second Exam</td>
                <td>55</td>
                <td>45</td>
                <td>50</td>
                <td>74</td>
                <td>90</td>
                <td>90</td>
                <td>-</td>
                <td>404 မှတ်</td>
              </tr>
              <tr>
                <td>Third Exam</td>
                <td>55</td>
                <td>45</td>
                <td>50</td>
                <td>74</td>
                <td>90</td>
                <td>90</td>
                <td>-</td>
                <td>404 မှတ်</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection