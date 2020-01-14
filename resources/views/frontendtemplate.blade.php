<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clover Private School - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">



	<link rel="stylesheet" href="{{ asset('fox/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('fox/css/animate.css')}}"> 

	<link rel="stylesheet" href="{{asset('fox/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('fox/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('fox/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('fox/css/aos.css')}}">

	<link rel="stylesheet" href="{{asset('fox/css/ionicons.min.css')}}">

	<link rel="stylesheet" href="{{asset('fox/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('fox/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('fox/css/style.css')}}">
</head>
<body>
	<div class="bg-top navbar-light">
		<div class="container-fluid">
			<div class="row no-gutters d-flex align-items-center align-items-stretch">
				<div class="col-md-4 d-flex align-items-center py-4">
					<a class="navbar-brand" href="index.html" style="color: #069370">Clover. <span>Private School</span></a>
				</div>
				<div class="col-lg-8 d-block">
					<div class="row d-flex">
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							
						</div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark text-light" style="background-color: #069370;">
		<div class="container d-flex align-items-center px-4">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a href="{{route('main')}}" class="nav-link pl-0">ပင်မစာမျက်နှာ</a></li>
					<li class="nav-item "><a href="{{route('about')}}" class="nav-link">ကျောင်းလုပ်ဆောင်မှု</a></li>
					<li class="nav-item"><a href="{{route('post')}}" class="nav-link">ကျောင်းအပ်နှံခြင်း</a></li>
					
					<li class="nav-item"><a href="{{route('login')}}" class="nav-link">အုပ်ထိန်းသူ</a></li></a></li>
					
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	

	<footer class="ftco-footer ftco-bg-dark ftco-section">
		 <div class="footer py-5" style="color: #fff">
    <div class="container">
      <div class="row">
      
          <div class="col-md-4 " >
          	<p>
            ကျောင်းသားနှင့် မိဘများထံမှ အကြုံပြုချက်များ၊ ကျောင်းတည်ထောင်စဥ်ကာလတလျောက်လုံး ကြုံတွေ့ခဲ့ရသည့် လိုအပ်ချက်များကို အကောင်းမွန်ဆုံး ဖြည့်စည်းပေးလျက်ရှိသည်။
           
        </p>
          </div>
          <div class="col-md-4 " style="padding-left: 100px" >
           
           <h3 class="widgetheading" style="color: #fff">Contact Us</h3>
            <a href="#">
              <p><i class="fa fa-envelope "></i> cloverprivateschool@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> 09-422551592</p>
            <p><i class="fa fa-home"></i> No.29/4floor/Hlaing Township</p>

          </div>
          <div class="col-md-4">
            <!-- <a href="#"><h1>Map</h1></a> -->
            <p>Jan 09 , 2020
            	CLOVER ကိုယ်ပိုင် အထက်တန်းကျောင်းတွင် ကျောင်းအပ်လက်ခံပါပြီ
            	၂၀၂၀ ပညာသင်နှစ်အတွက် Clover ကိုယ်ပိုင်အထက်တန်းကျောင်းတွင် ကျောင်းအပ်နှံရန် ကြိုတင်စာရင်းသွင်းနိုင်ပါပြီ။
            	ကျောင်းတွင် သင်ကြားပို့ချပေးသော ဆရာ၊ဆရာမ များ နှင့် ကျောင်းတွင် လိုက်နာရန် စည်းကမ်းချက်များ ၊ ကျောင်းအချက်အလက်များ ၊ ကျောင်းအတန်း အလိုက် ကျောင်းနေစရိတ်များကို လေ့လာနိုင်ပါသည်။
            </p>
          </div>

      </div>
    </div>
  </div>
		</footer>



		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#069370"/></svg></div>


		<script src="{{asset('fox/js/jquery.min.js')}}"></script>
		<script src="{{asset('fox/js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{asset('fox/js/popper.min.js')}}"></script>
		<script src="{{asset('fox/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('fox/js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('fox/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('fox/js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('fox/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('fox/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('fox/js/aos.js')}}"></script>
		<script src="{{asset('fox/js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{asset('fox/js/scrollax.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{asset('fox/js/google-map.js')}}"></script>
		<script src="{{asset('fox/js/main.js')}}"></script>

	</body>
	</html>