@extends('frontendtemplate')
@section('content')
<section class="ftco-services ftco-no-pb">
	<div class="container-wrap">
		<div class="row no-gutters">
			<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-teacher"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">ဆရာ၊ ဆရာမများ</h3>
						<p>ဘာသာရပ်ဆိုင်ရာ ကျွမ်းကျင်ပိုင်နိုင်လျက် သင်ကြားရေး တွင်အတွေ့ အကြုံရင်ကျက်သော ဆရာ၊ ဆရာမများနှင့် သင်ကြားပေးခြင်း။</p>
					</div>
				</div>      
			</div>
			<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-reading"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">အထူးသင်ကြားရေး</h3>
						<p>မြန်မာတနိုင်ငံလုံး အဆင့် ၁၀တွင်း ဝင်နိုင်ရန် သည်းသန့် ကျောင်းသား ၃၀ အား ပါမောက္ခချုပ်ကြီးများဖြင့် အထူးလေ့ကျင့်သင်ကြားပေးခြင်း။</p>
					</div>
				</div>    
			</div>
			<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-books"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">စာကြည့်တိုက်</h3>
						<p>သင်ကြားရေးဆိုင်ရာ အထောက်အကူဖြစ်စေရန်နှင့် ပြင်ပ ဗဟုသုတများကြွယ်ဝစေရန် စာကြည့်တိုက်ထားရှိပေးခြင်း။</p>
					</div>
				</div>      
			</div>
			<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-diploma"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">အားကစားခန်းမများ</h3>
						<p>ရုပ်ပိုင်းဆိုင်ရာ ဖွင့်ဖြိုးတိုးတက်မှုကောင်းမွန်စေရန် ခေတ်မှီအားကစားခန်းမများ ဖူဆယ်ဘောလုံးကွင်းများ ထားရှိပေးခြင်း။</p>
					</div>
				</div>      
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
				<div class=""><img src="{{asset('fox/images/course-8.jpg')}}" class="card-img" alt="..."></div>
			</div>
			<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
				<h2 class="mb-4">ကျောင်းတွင်းဝန်ဆောင်မှု</h2>
				<p>ကျောင်းတွင်းဝန်ဆောင်မှု့များအနေဖြင့် ကျောင်းသားနှင့် မိဘများထံမှ အကြုံပြုချက်များ၊ ကျောင်းတည်ထောင်စဥ်ကာလတလျောက်လုံး ကြုံတွေ့ခဲ့ရသည့် လိုအပ်ချက်များကို အကောင်းမွန်ဆုံး ဖြည့်စည်းပေးလျက်ရှိသည်။</p>
				<div class="row mt-5">
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
							<div class="text pl-3">
								<h3>ကျန်းမာရေးဆောင့်ရှောက်မှု</h3>
								<p>သမားတော်ကြီးများဖြင့် ကျောင်းသား ကျောင်းသူများအတွက် ကျန်းမာရေးစောင့်ရှောက်မှုများ။</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
							<div class="text pl-3">
								<h3>စာကြည့်တိုက်</h3>
								<p>သင်ကားရေးဆိုင်ရာ အထောက် အကူဖြစ်စေရန်နှင့် ပြင်ပ ဗဟုသုတများကြွယ်ဝစေရန် စာကြည့်တိုက်ထားရှိပေးခြင်း။</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
							<div class="text pl-3">
								<h3>ဝါရင့် ဆရာ၊ ဆရာမများ</h3>
								<p>သင်ကြားရေးအတွေ့အကြုံများ၍ သားသမီးသဖွယ် ဂရုတစိုက်သင်ကြားပေးလေ့ရှိသော ဆရာ၊ ဆရာဆရာမများ။</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
							<div class="text pl-3">
								<h3>ကျောင်းတွင်းသန့်ရှင်းရေး</h3>
								<p>လေဝင်လေထွက်ကောင်းမွန်၍ ကျယ်ဝန်းသောစာသင်ခန်းများဖြင့် စနစ်တကျ စာသင်ကြားခြင်း။</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
							<div class="text pl-3">
								<h3>တီထွင်နိုင်မှုစွမ်းရည်</h3>
								<p>တည်ထွင်နိုင်မှုစွမ်းရည် ပြည့်ဝစေရန် program များပြုလုပ်ပေးခြင်း။</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
							<div class="text pl-3">
								<h3>အားကစားပစ္စည်းများ</h3>
								<p>ရုပ်ပိုင်းဆိုင်ရာ ဖွင့်ဖြိုးတိုးတက်မှုကောင်းမွန်စေရန် ခေတ်မှီအားကစားခန်းမများ ဖူဆယ်ဘောလုံးကွင်းများ ထားရှိပေးခြင်း။</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(fox/images/6.jpeg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2 d-flex">
			<div class="col-md-6 align-items-stretch d-flex">
				<div class="img img-video d-flex align-items-center" style="background-image: url(fox/images/about-2.jpg);">
					<div class="video justify-content-center">
						<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<span class="ion-ios-play"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
				<h2 class="mb-4">Clover အထက်တန်းကျောင်း</h2>
				<p>ရန်ကုန်မြို့ လှိုင်မြို့နယ်တွင်တည်ရှိပြီး ၂၀၀၀ ခုနှစ်တွင် ကျောင်းသားဦးရေ ၁၄ ယောက်ဖြင့် စတင်တည်ထောင်ခဲ့သည်။ ကျောင်းတည်ထောင်ချိန်မှစ၍ ယနေ့တိုင် အောင်ချက်ကောင်းများစွာဖြင့် တည်ရှိပြီး မြန်မာနိုင်ငံ ထိပ်သီးဆယ်ယောက်တွင် လေးနှစ်ပါဝင်နိုင်ခဲ့သည်။</p>
				<p>ကျောင်းတည်ထောင်ချိန်မှစ၍ ယနေ့တိုင် ကျောင်းသားကျောင်းသူများအနာဂါတ်အတွက် ရှေးရှုကာ ပညာသင်ကြားပေးနေပြီး အဘက်ဘက်မှ ပြည့်စုံသော‌ကျောင်းသား ကျောင်းသူကောင်းများပေါ်ထွက်လာရန် ရည်ရွည်သည်။</p>
			</div>
		</div>	
		<div class="row d-md-flex align-items-center justify-content-center">
			<div class="col-lg-12">
				<div class="row d-md-flex align-items-center">
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="18">0</strong>
								<span>Certified Teachers</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="401">0</strong>
								<span>Students</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="30">0</strong>
								<span>Courses</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="50">0</strong>
								<span>Awards Won</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection