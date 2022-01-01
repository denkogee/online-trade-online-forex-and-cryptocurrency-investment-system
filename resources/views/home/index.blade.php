@inject('content', 'App\Http\Controllers\FrontController')

<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$settings->site_name}} | {{$settings->site_title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.png and root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('temp/asset/img/logo/favicon.ico')}}">

    <!-- All css here -->

    <!-- bootstrap 4.0 css -->
    <link rel="stylesheet" href="{{asset ('temp/asset/css/bootstrap.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset ('temp/asset/css/owl.carousel.min.css')}} ">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset ('temp/asset/css/animate.min.css')}} ">
    <!-- magnific css -->
    <link rel="stylesheet" href="{{asset ('temp/asset/css/magnific-popup.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset ('temp/asset/css/meanmenu.min.css')}} ">
    <!-- Icon font css -->
    <link rel="stylesheet" href="{{asset ('temp/asset/css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href="{{asset ('temp/asset/css/themify-icons.css')}} ">
    <link rel="stylesheet" href="{{asset ('temp/asset/css/flaticon.css')}} ">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset ('temp/asset/style.css')}} ">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset ('temp/asset/css/responsive.css')}} ">

    <style>
        .contact-single {
            padding: 20px;
            box-shadow: 0 5px 25px rgb(0 0 0 / 10%);
            border: 1px solid #150550;
            margin-top: 50px;
            background: #150550;
            position: relative;
        }
        .footer-area-bottom .copyright {
            text-align: center;
            /* padding-top: 30px; */
        }
    </style>
</head>


<body>
    <!-- preloader  -->
    <div id="preloader"></div>
    <!-- Start header -->
    <header id="header" class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 col-sm-8 col-xs-12">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i> {{$settings->contact_email}} </a></li>
                                <!-- <li><a href="#"><i class="fa fa-clock-o"></i> Live support</a></li> -->
                            </ul>  
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="topbar-right">
                            <ul>
                                <li><a href="#intro"><img src="{{asset ('temp/asset/img/icon/login.png')}}" alt="">Login</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->
        <!-- Start Header Menu -->
        <div id="sticker" class="header-menu-area header-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 d-flex align-items-center">
                        <div class="logo">
                            <a href="#intro"><img src="{{asset ('temp/asset/img/logo/logo2.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-9">
                        <!-- <div class="header-right">
                            <a href="{{$settings->bot_link}}" class="hd-btn">Get started</a>
                        </div> -->
                        <div class="header_menu f-right">
                            <nav id="mobile-menu">
                                <ul class="main-menu">
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#pricing">Pricing</a></li>
                                    <li><a href="#testimonials">Testimonials</a></li>
                                    <li><a href="#contact">Contact us</a></li>
                                    @if($settings->site_preference =="Web dashboard only")
                                        @guest
                                        <li><a href="login" class="">Sign In</a></li>
                                        <!-- <li><a href="register" class="btn-log ">Get started</a></li> -->
                                        <div class="header-right">
                                            <a href="register" class="hd-btn">Get started</a>
                                        </div>
                                        @else
                                        

                                        <!-- <li class="menu-item-has-children">
                                            <a href="#">{{ Auth::user()->name }}</a>
                                            <ul class="submenu">
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        
                                        <li class="nav-item dropdown menu-item-has-children avatar">
                                                <a id="navbarDropdownMenuLink-55" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                                                <ul class="submenu">
                                                <li>
                                                    <a href="dashboard" class="dropdown-item">Dashboard</a><br>
                                                </li>
                                                <li> <a href="{{ route('logout') }}" class="dropdown-item"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                    </li>
                                                    </ul>                                                
                                        </li>


                                        @endguest
                                        @else
                                        <li><a href="register" class="btn-log ">Get started</a></li>
                                        @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Menu -->
    </header>
    <!-- End header area -->
    <main>
        <!-- Start intro area -->
        <div class="intro-area intro-home">
            <div class="bg-wrapper">
            	<img src="{{asset ('temp/asset/img/background/bg4.jpg')}}" alt="">
            </div>
			<div class="intro-content">
				<div class="slider-content">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="slide-all-text">
								    <!-- layer 1 -->
                                   <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                                        <h4 class="title-1">{{$content->getContent('toe3Ew','description')}} </h4>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2 wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 class="title-2">{{$content->getContent('toe3Ew','title')}}</h1>
                                    </div>
                                    <!-- layer 3 -->
                                        <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                        <a href="register" class="ready-btn" >Get Started</a>
                                    </div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="slide-images-inner wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="slide-images">
                                        <img src="{{asset ('temp/asset/img/slider/s1.png')}}" alt="">
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- End intro Area -->



    <!--==========================
      Services Section Starts
    ============================-->
        <div class="choose-service-area bg-color area-padding-2" id="services">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h2>{{$content->getContent('u0Ervr','title')}}</h2>
                            <p>{{$content->getContent('u0Ervr','description')}}</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <!-- Start About -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services ">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-023-management"></i></a>
                                 <h5>{{$content->getContent('Dwu6Bv','title')}}</h5>
                            </div>
                            <div class="choose-content">
                                <p>{{$content->getContent('Dwu6Bv','description')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start About -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services ">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-036-security"></i></a>
                                <h5>{{$content->getContent('eMo1d2','title')}}</h5>
                            </div>
                            <div class="choose-content">
                                <p>{{$content->getContent('eMo1d2','description')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services ">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-003-approve"></i></a>
                                <h5>{{$content->getContent('kEJPm3','title')}}</h5>
                            </div>
                            <div class="choose-content">
                                <p>{{$content->getContent('kEJPm3','description')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-042-wallet"></i></a>
                                <h5>{{$content->getContent('bBSnFV','title')}}</h5>
                            </div>
                            <div class="choose-content">
                                <p>{{$content->getContent('bBSnFV','description')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services ">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-032-report"></i></a>
                                <h5>{{$content->getContent('DUK9pc','title')}}</h5>
                            </div>
                            <div class="choose-content">
                                <p>{{$content->getContent('DUK9pc','description')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-024-megaphone"></i></a>
                                <h5>{{$content->getContent('VaeiMW','title')}}</h5>
                            </div>
                            <div class="choose-content">
                                <p>{{$content->getContent('VaeiMW','description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--==========================
      Services Section Ends
    ============================-->

    <!--==========================
      Investment Section Starts
    ============================-->
        <div class="invest-area bg-color-2 area-padding-2" id="pricing">
            <div class="container">
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>{{$content->getContent('vr6Xw0','title')}}</h2>
                            <p>{{$content->getContent('vr6Xw0','description')}}</p>
                        </div>
                    </div>
               </div>
                <div class="row">

                @foreach ($plans as $plan)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pri_table_list text-center">
                            <div class="top-price-inner">
                                <h3>{{$plan->name}}</h3>
                                <div class="rates">
                                    <!-- <span class="prices">5%</span><span class="users">Weekly</span> -->
                                        <span class="prices">{{$settings->currency}} {{$plan->price}}</span>
                                        <h6>{{$settings->s_currency}}</h6>
                                </div>
                            </div>
                            <ol class="pricing-text">
                                <li><i class="check"></i>Min. Possible deposit: {{$settings->currency}}{{$plan->min_price}}</li>
                                <li><i class="check"></i>Max. Possible deposit: {{$settings->currency}}{{$plan->max_price}}</li>
                                <li><i class="check"></i>{{$settings->currency}}{{$plan->minr}} Minimum return</li>
                                <li><i class="check"></i>{{$settings->currency}}{{$plan->maxr}} Maximum return</li>
                                <li><i class="check"></i>{{$settings->currency}}{{$plan->gift}} Gift Bonus</li>
                            </ol>
                            <div class="price-btn">
                                <a class="blue" href="">Invest Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                   
                </div>
            </div>
        </div>
        <!--==========================
            Investment Section Ends
        ============================-->

        <!--Start payment-history area -->
        <div class="payment-history-area fix area-padding"  id="transaction">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline left-headline">
                            <h2>{{$content->getContent('OtEicb','title')}}</h2>
                            <p>{{$content->getContent('OtEicb','description')}}</p>
						</div>

					</div>
				</div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <!-- Start Nav tabs -->
                        <ul class="nav payment-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" href="#tab-1" role="tab" data-toggle="tab">
                                    <span class="cha-title">Last Deposite</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">
                                    <span class="cha-title">Last Withdraw</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav tabs -->
					</div>
				</div>
                <div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="tab-content">
						    <!--Start Tab Content -->
							<div role="tabpanel" class="tab-pane fade in active show" id="tab-1">
                                <div class="deposite-content">
                                    <div class="diposite-box">
                                        <div class="deposite-table">
                                            <table>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">amount</th>
                                                    <th scope="col">Mode</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($withdrawals as $deposit)
                                                <tr>
                                                    <th scope="row">{{$deposit->duser->name}}</th>
                                                    <td>{{$deposit->created_at}}</td>
                                                    <td>{{$settings->currency}}{{$deposit->amount}}</td>
                                                    <td>{{$deposit->payment_mode}}</td>
                                                    <td>{{$deposit->status}}</td>
                                                </tr>
                                                @endforeach
                                            <tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <div class="deposite-content">
                                    <div class="diposite-box">
                                        <div class="deposite-table">
                                            <table>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">amount</th>
                                                    <th scope="col">Mode</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($deposits as $deposit)
                                                <tr>
                                                <th scope="row">{{$deposit->duser->name}}</th>
                                                <td>{{$deposit->created_at}}</td>
                                                <td>{{$settings->currency}}{{$deposit->amount}}</td>
                                                <td>{{$deposit->payment_mode}}</td>
                                                <td>{{$deposit->status}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End payment-history area -->
        <!-- Start payment-history area -->
        <div class="contact-page bg-color area-padding">

        <div class="container">
                <!-- Start counter Area -->
            </div>

            <div class="container" id="contact">
                <div class="row">

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h2>{{$content->getContent('9sNF7G','title')}}</h2>
                            <p>{{$content->getContent('9sNF7G','description')}}</p>
						</div>
					</div>
                    
                    <!-- End contact icon -->
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="contact-form">
                           <form id="contactForm" method="POST" action="{{action('App\Http\Controllers\UsersController@sendcontact')}}" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" class="form-control" id="form3" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="form-control" name="email" id="form2" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"required />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                                    <!-- <textarea id="message" rows="7" placeholder="Massage" class="form-control" required="" data-error="Write your message"></textarea> -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                                    <div class="validation"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" class="contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </div> 
                            </form>  
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>


                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-single">
                        <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <h4>{{$content->getContent('52GPRA','title')}}</h4>
                            <h6>{{$content->getContent('52GPRA','description')}}</h6>                            
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-single">
                        <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <h4>{{$content->getContent('0EXbji','title')}}</h4>
                            <h6>{{$content->getContent('0EXbji','description')}}</h6>                            
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-single">
                        <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <h4>EMAIL</h4>
                            <h6>{{$settings->contact_email}}</h6>                            
                        </div>
                    </div>                    
                </div>
                
            </div>
        </div>

        <!--==========================
            FAQ Section Starts
        ============================-->
        <div class="faq-area bg-color-2 area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>{{$content->getContent('OLZt1I','title')}}</h2>
                            <p>{{$content->getContent('OLZt1I','description')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Column Start -->


                @foreach ($faqs as $item)
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="company-faq-left">
                            <div class="faq_inner">
                                <div id="accordion">
                                    <div class="card">
                                      <div class="card-header white-bg" id="heading{{$item->id}}">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn" data-toggle="collapse" data-target="#faq{{$item->id}}" aria-expanded="true" aria-controls="faq{{$item->id}}">
                                          {{$item->id}}. {{$item->question}}? 
                                          </button>
                                        </h4>
                                      </div>

                                      <div id="faq{{$item->id}}" class="collapse show " aria-labelledby="heading{{$item->id}}" data-parent="#accordion">
                                        <div class="card-body">
                                            {{$item->answer}}
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                @endforeach
                
                </div>
            </div>
        </div>
        <!--==========================
            FAQ Section Ends
        ============================-->

        <!--==========================
        Testimonials Sections Starts
        ============================-->
        <div class="reviews-area bg-color area-padding" id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="testimonial-inner">
                            <div class="review-head">
                                <h2>{{$content->getContent('SMsJr1','title')}}</h2>
                                <p>{{$content->getContent('SMsJr1','description')}}</p>
                                <!-- <a class="reviews-btn anti-btn" href="review.html">More reviews</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-6">
                        <div class="Reviews-content">
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel owl-carousel">

                                <!-- starts single testimonial -->
                                @foreach ($test as $testimony)
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="testi-img ">
                                                <img src="{{ asset('storage/app/public/photos/'.$testimony->picture)}}" alt="">
                                                <div class="guest-details">
                                                    <h4>{{$testimony->name}}</h4>
                                                    <span class="guest-rev">{{$testimony->position}}</span>
                                                </div>
                                            </div>
                                            <p>{{$testimony->what_is_said}}.</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- End single testimonial -->
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==========================
        Testimonials Sections Ends
        ============================-->

        <!--==========================
            Payments Sections Starts 
        ============================-->
        <div class="subscribe-area bg-color">
            <div class="container">
                <div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="subscribe-inner">
						    <div class="subdcribe-content">
                                <div class="section-headline text-center">
                                    <h2>{{$content->getContent('U7zpEj','title')}}</h2>
                                 </div>
                                <div class="brand-content">
                                    <div class="brand-carousel owl-carousel">
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('temp/img/payments/payment-1.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('temp/img/payments/payment-2.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('temp/img/payments/payment-3.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('temp/img/payments/payment-4.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('temp/img/payments/payment-5.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('temp/img/payments/payment-6.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('temp/img/payments/payment-7.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('temp/img/payments/payment-8.png')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!--==========================
            Payments Sections Ends
        ============================-->

    </main>
  
        <!--==========================
            Footer Sections Starts
        ============================-->
    <footer class="footer1">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-content logo-footer">
                            <div class="footer-head">
                                <h4>About {{$settings->site_name}}</h4>
                                <p>
                                {{$content->getContent('ETsdbc','description')}}
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 d-flex align-items-center">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Useful Links</h4>
                                <ul class="footer-list">
                                <li><a href="#intro"> Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#">Terms of service</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-content last-content rs-mar-0">
                            <div class="footer-head">
                                <h4>Support</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Customer Care</a></li>
                                    <li><a href="#">Live chat</a></li>
                                    <li><a href="#">Notification</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Contact us </a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6 footer-contact">           
                    <h4>Contact Us</h4>
                    <p>
                    {{$content->getContent('52GPRA','description')}} <br>
                    <a href="#" class="text-white"><strong>Phone:</strong> {{$content->getContent('0EXbji','description')}}<br></a>
                    <a href="#" class="text-white"><strong>Email:</strong> {{$settings->contact_email}}<br></a>
                    </p>

                    <div class="footer-icons">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom Area -->


        <div class="footer-area-bottom">

        <div class="container">
      <!-- <div class="copyright">
        &copy; Copyright  {{date('Y')}} &nbsp;<strong> {{$settings->site_name}} &nbsp;</strong> All Rights Reserved.
      </div> -->
                    <div class="copyright">
                            <p>
                                Copyright © {{date('Y')}} &nbsp;
                                <a href="#"> 
                                    <strong> {{$settings->site_name}} &nbsp;</strong> 
                                </a> All Rights Reserved
                            </p>
                        </div>
                    </div>

        </div>
        <!-- End Footer Bottom Area -->
    </footer>
    <!--==========================
        Footer Sections Ends
    ============================-->

    <!-- All JS here -->

    <!-- modernizr JS -->
    <script src="{{asset ('temp/asset/js/vendor/modernizr-3.5.0.min.js')}} "></script>
    <!-- jquery latest version -->
    <script src="{{asset ('temp/asset/js/vendor/jquery-1.12.4.min.js')}} "></script>
    <!-- Poper js -->
    <script src="{{asset ('temp/asset/js/popper.min.js')}} "></script>
    <!-- bootstrap js -->
    <script src="{{asset ('temp/asset/js/bootstrap.min.js')}} "></script>
    <!-- owl.carousel js -->
    <script src="{{asset ('temp/asset/js/owl.carousel.min.js')}} "></script>
    <!-- meanmenu js -->
    <script src="{{asset ('temp/asset/js/jquery.meanmenu.js')}} "></script>
    <!-- Counter js -->
    <script src="{{asset ('temp/asset/js/jquery.counterup.min.js')}} "></script>
    <!-- waypoint js -->
    <script src="{{asset ('temp/asset/js/waypoints.js')}} "></script>
    <!-- magnific js -->
    <script src="{{asset ('temp/asset/js/magnific.min.js')}} "></script>
    <!-- wow js -->
    <script src="{{asset ('temp/asset/js/wow.min.js')}} "></script>
    <!-- plugins js -->
    <script src="{{asset ('temp/asset/js/plugins.js')}} "></script>
    <!-- main js -->
    <script src="{{asset ('temp/asset/js/main.js')}} "></script>
</body>

</html>