@extends('frontendtemplate')
@section('content')

<div class="container" style="margin-top: 10rem;">	
	<div class="card mb-3 w-100 shadow" style="height: auto;">
		<div class="row no-gutters">
			
			<div class="col-md-8">
				<div class="card-body">
					
					<form novalidate method="post" action="{{route('preregisters.update',$preregister->id)}}" enctype="multipart/form-data">
						@csrf
						 @method('PUT')
						<h5 class="card-title text-muted">ကျောင်းသားအချက်အလက်များကို မှန်ကန်စွာဖြည့်ပါ</h5>
						<br>
						<div class="row form-group">
							<div class="col-md-6 mb-3">
								<label for="personal_id">ကျောင်းသားကိုယ်ပိုင်နံပါတ်</label>
								<input type="text" id="personal_id" name="personal_id" placeholder="၁၁" class="form-control">
								@error('personal_id')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
						<div class="row form-group">
							<div class="col-md-6 mb-3">
								<label for="namem">ကျောင်းသားအမည် ( မြန်မာစာဖြင့် )</label>
								<input type="text" id="namem" name="namem" placeholder="မောင်မောင်" class="form-control" value="{{$preregister->namem}}">
								@error('namem')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
							<div class="col-md-6">
								<label for="namee">ကျောင်းသားအမည် ( အင်္ဂလိပ်စာဖြင့် )</label>
								<input type="text" id="namee" name="namee" placeholder="Mg Mg" class="form-control" value="{{$preregister->namee}}">
								@error('namee')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6 mb-3">
								<label for="nrc_no">ကျောင်းသား မှတ်ပုံတင်</label>
								<input type="text" id="nrc_no" name="nrc_no" class="form-control text-uppercase" placeholder="00/ABC(N)123456" value="{{$preregister->nrc_no}}">
								@error('nrc_no')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
							<div class="col-md-6">
								<label for="dob">ကျောင်းသား မွေးသက္ကရာဇ်</label>
								<input type="date" id="dob" name="dob" class="form-control" value="{{$preregister->dob}}">
								@error('dob')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6 mb-3">
								<select class="custom-select" name="grade" value="{{$preregister->grade}}">
									<option selected disabled="true">အတန်း</option>
									<option value="1">အဌမတန်း</option>
									<option value="2">နဝမတန်း</option>
									<option value="3">တက္ကသိုလ်ဝင်တန်း</option>
								</select>
								@error('grade')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
							<div class="col-md-6">
								<select class="custom-select" name="subject" value="{{$preregister->subject}}">
									<option selected disabled="true">ဘာသာတွဲ</option>
									<option value="1">Biology</option>
									<option value="2">Economic</option>
								</select>
								@error('subject')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<label for="profile">ကျောင်းသား ဓာတ်ပုံ</label>
							<input type="file" name="profile" class="form-control-file" id="profile" value="{{$preregister->profile}}">
							@error('profile')
							<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
							@enderror
						</div>					
						<br>
						
						<h5 class="card-title text-muted">အုပ်ထိန်းသူအချက်အလက်များကို မှန်ကန်စွာဖြည့်ပါ</h5>
						<br>
						<div class="row form-group">
							<div class="col-md-6 mb-3">
								<label for="g1_name">ဖခင်အမည် ( မြန်မာစာဖြင့် )</label>
								<input type="text" name="g1_name" id="g1_name" class="form-control" value="{{$preregister->g1_name}}">
								@error('g1_name')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
							<div class="col-md-6">
								<label for="g1_nrc">မှတ်ပုံတင်အမှတ်</label>
								<input type="text" name="g1_nrc" id="g1_nrc" class="form-control" value="{{$preregister->g1_nrc}}">
								@error('g1_nrc')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6 mb-3">
								<label for="g2_name">မိခင်အမည် ( မြန်မာစာဖြင့် )</label>
								<input type="text" name="g2_name" id="g2_name" class="form-control" value="{{$preregister->g2_name}}">
								@error('g2_name')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
							<div class="col-md-6">
								<label for="g2_nrc">မှတ်ပုံတင်အမှတ်</label>
								<input type="text" name="g2_nrc" id="g2_nrc" class="form-control" value="{{$preregister->g2_nrc}}">
								@error('g2_nrc')
								<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<label for="phone">ဆက်သွယ်ရန်ဖုန်းနံပါတ်</label>
							<input type="text" name="phone" id="phone" class="form-control" value="{{$preregister->phone}}">
							@error('phone')
							<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
							@enderror
						</div>
						<div class="form-group">
							<label for="address">ဆက်သွယ်ရန်လိပ်စာ</label>
							<textarea type="text" name="address" id="address" class="form-control" rows="2" value="{{$preregister->address}}"></textarea> 
							@error('address')
							<p class="text-danger" style="font-size: 15px;">{{$message}}</p>
							@enderror
						</div>
						<button type="submit" class="btn btn-success mb-2  btn-block" style="background: #069370;">ပြင်ဆင်မည်</button>
					</form>
					
       			 
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


