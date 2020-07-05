<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Readit - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('readit') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('readit') }}/css/animate.css">
    
    <link rel="stylesheet" href="{{ asset('readit') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('readit') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('readit') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('readit') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('readit') }}/css/ionicons.min.css">
    
    <link rel="stylesheet" href="{{ asset('readit') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('readit') }}/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('readit') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('readit') }}/css/ar.css">
  </head>
  <body>
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">أقرأ<i>ها</i></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> القائمة
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">الرئيسية</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">المقالات</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">فريق العمل</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">تواصل معنا</a></li>
            @if(Auth::check())
              <li class="nav-item">
                  <a href="#" class="nav-link"> مرحبا {{ Auth::user()->name}}</a>
              </li>
              <li class="nav-item">
                  <a href="/logout" class="nav-link">تسجيل الخروج</a>
              </li>
              @else
              <li class="nav-item">
                  <a href="/register" class="nav-link">التسجيل</a>
              </li>
              <li class="nav-item">
                  <a href="/login" class="nav-link">تسجيل الدخول</a>
              </li>
            @endif
	        </ul>
	      </div>
	    </div>
	  </nav>
	<!-- END nav -->
	<div class="hero-wrap js-fullheight" style="background-image: url({{asset('readit')}}/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate">
          	<h2 class="subheading">أهلا ومرحبا بكم فى </h2>
          	<h1 class="mb-4 mb-md-0">مدونة اقرئها</h1>
          	<div class="row">
          		<div class="col-md-7">
          			<div class="text">
	          			<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص</p>
	          			<div class="mouse">
										<a href="#" class="mouse-icon">
											<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
										</a>
									</div>
								</div>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </div>
@yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">اقر<span>ئ</span>.</a></h2>
              <p>
              للقراءة بنوعيها فوائد جمّة حيث تهذّب الفرد بما يقرأه من علوم وآداب، وتريحه من الإجهاد 
              والإرهاق لا سيما إذا ما قرأ كتب الأدب واللطائف والروايات، وتنمي مهاراته الكتابية، وقدرته على التفكير 
              التحليلي من خلال تحليله للمعلومات وربطها معاً، كما أنّها تنمي الذاكرة وتنشطها، وتدفع الفرد لتحقيق
               التميّز في حقول المعرفة والدراسة، وتبعده عن الوقوع في المعاصي التي تتسبب بها أوقات الفراغ


                </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">جديد الاخبار</h2>
              <div class="block-21 mb-4 d-flex">
	              <a class="img mr-4 rounded" style="background-image: url({{asset('readit')}}/images/image_1.jpg);"></a>
	              <div class="text">
	                <h3 class="heading"><a href="#">الاستاذ اسامه الزيرو يبدء فى تجهيز دورة laravel</a></h3>
	                <div class="meta">
	                  <div><a href="#"></span> Oct. 16, 2019</a></div>
	                  <div><a href="#"></span> Admin</a></div>
	                  <div><a href="#"></span> 19</a></div>
	                </div>
	              </div>
	            </div>
	            <div class="block-21 mb-4 d-flex">
	              <a class="img mr-4 rounded" style="background-image: url({{asset('readit')}}/images/image_2.jpg);"></a>
	              <div class="text">
	                <h3 class="heading"><a href="#">موقع يوديمى يقدم العديد من الدورات المجانيه اليوم</a></h3>
	                <div class="meta">
	                  <div><a href="#"></span> Oct. 16, 2019</a></div>
	                  <div><a href="#"></span> Admin</a></div>
	                  <div><a href="#"></span> 19</a></div>
	                </div>
	              </div>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">روابط مهمه</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>الرئيسية</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>عنا</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>المقالات</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>التواصل</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">لديك سؤال ؟ </h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('readit') }}/js/jquery.min.js"></script>
  <script src="{{ asset('readit') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('readit') }}/js/popper.min.js"></script>
  <script src="{{ asset('readit') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('readit') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('readit') }}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('readit') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('readit') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('readit') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('readit') }}/js/aos.js"></script>
  <script src="{{ asset('readit') }}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('readit') }}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('readit') }}/js/google-map.js"></script>
  <script src="{{ asset('readit') }}/js/main.js"></script>
    
  </body>
</html>