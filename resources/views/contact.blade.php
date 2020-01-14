@extends('frontendtemplate')
@section('content')

<div class="container" style="margin-top: 10rem; margin-bottom: 5rem;">	
	<div class="card mb-3 w-100 shadow" style="height: auto;">
		<div class="row no-gutters">
			
			<div class="col-md-8">
				<div class="card-body">
					
					<form novalidate method="post" action="{{route('students.store')}}" enctype="multipart/form-data">
						@csrf
						
						<br>
						<div class="form-group">
							<div class="">
								<label for="namem">ကျောင်းနာမည်</label>
								<input type="text" id="namem" name="namem" placeholder="မောင်မောင်" class="form-control mb-1">
								@error('namem')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<div class="">
								<label for="student_id">ကျောင်း၀င်နံပါတ်</label>
								<input type="text" id="student_id" name="student_id" placeholder="၁၁" class="form-control mb-1">
								@error('student_id')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
						</div>
						

						<div class="form-group">
							<label for="content">ပြောကြားလိုသည်ကို အောက်တွင် ရေးပေးပါ</label>
							<textarea type="text" name="content" id="content" class="form-control mb-1" rows="8"></textarea> 
							@error('content')
							<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
							@enderror
						</div>
						<div class="form-group">
							<label for="address">နေရိပ်လိပ်စာ</label>
							<textarea type="text" name="address" id="address" class="form-control mb-3" rows="2"></textarea> 
							@error('address')
							<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
							@enderror
						</div>
						<div class="row form-group">
							<div class="col-md-6">
								<label for="g1_name">အမည် ဖြည့်ပေးပါ</label>
								<input type="text" id="g1_name" name="g1_name" placeholder="" class="form-control mb-1">
								@error('g1_name')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
							<div class="col-md-6 mb-3">
								<label for="phone">ပြန်လည်ဆက်သွယ်နိုင်ရန် ဖုန်းနံပါတ် ဖြည့်ပေးပါ</label>
								<input type="text" id="phone" name="phone" placeholder="" class="form-control mb-1">
								@error('phone')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
							
							
						
							
						</div>
						

					</form>
					<div class="text-center">
				<a href="{{route('students.create')}}" class="btn rounded mt-3 mb-5 p-2 shadow" style="background: #069370; color: #fff;">ကျောင်းသို့ပေးပို့မည်</a>
			</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection