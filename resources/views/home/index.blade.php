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
                                <li><a href="#"><i class="fa fa-envelope"></i> info@custom23.com</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> Live support</a></li>
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
                                    <li><a href="#about">About</a></li>
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
                                        <li class="nav-item dropdown avatar">
                                                <a id="navbarDropdownMenuLink-55" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
                                                <a href="dashboard" class="dropdown-item text-dark">Dashboard</a><br>
                                                    <a href="{{ route('logout') }}" class="dropdown-item text-dark"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </div>
                                        </li>
                                        @endguest
                                        @else
                                        <li><a href="{{$settings->bot_link}}" class="btn-log ">Get started</a></li>
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
                                        <h4 class="title-1">Safe and secure investment company</h4>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2 wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 class="title-2">Invest for future in best platform</h1>
                                    </div>
                                    <!-- layer 3 -->
                                        <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                        <a href="services.html" class="ready-btn" >Get Started</a>
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


        <!-- Start Investment area -->
        <div class="invest-area bg-color-2 area-padding-2">
            <div class="container">
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>Investment plan</h2>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pri_table_list text-center">
                            <div class="top-price-inner">
                                <h3>Silver plan</h3>
                                <div class="rates">
                                    <span class="prices">5%</span><span class="users">Weekly</span>
                                </div>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $100</li>
                                <li class="check">Maximam Invest : $1000</li>
                                <li class="check">Avarage Monthly : 50% </li>
                            </ol>
                            <div class="price-btn">
                                <a class="blue" href="#">Invest Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pri_table_list text-center">
                            <div class="top-price-inner">
                                <h3>Gold plan</h3>
                                <div class="rates">
                                    <span class="prices">15%</span><span class="users">Weekly</span>
                                </div>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $1000</li>
                                <li class="check">Maximam Invest : $10000</li>
                                <li class="check">Avarage Monthly :100% </li>
                            </ol>
                            <div class="price-btn">
                                <a class="blue" href="#">Invest Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pri_table_list text-center">
                            <div class="top-price-inner">
                                <h3>Platinum plan</h3>
                                <div class="rates">
                                    <span class="prices">50%</span><span class="users">Weekly</span>
                                </div>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $1000</li>
                                <li class="check">Maximam Invest : $50000</li>
                                <li class="check">Avarage Monthly : 200% </li>
                            </ol>
                            <div class="price-btn">
                                <a class="blue" href="#">Invest Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pri_table_list text-center">
                            <span class="base">Best sale</span>
                            <div class="top-price-inner">
                                <h3>Diamond plan</h3>
                                <div class="rates">
                                    <span class="prices">100%</span><span class="users">Monthly</span>
                                </div>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $1000</li>
                                <li class="check">Maximam Invest : $50000</li>
                                <li class="check">Avarage Monthly : 250% </li>
                            </ol>
                            <div class="price-btn">
                                <a class="blue" href="#">Invest Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pri_table_list text-center">
                            <span class="base">Best sale</span>
                            <div class="top-price-inner">
                                <h3>Premium plan</h3>
                                <div class="rates">
                                    <span class="prices">100%</span><span class="users">Monthly</span>
                                </div>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $1000</li>
                                <li class="check">Maximam Invest : $50000</li>
                                <li class="check">Avarage Monthly : 250% </li>
                            </ol>
                            <div class="price-btn">
                                <a class="blue" href="#">Invest Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pri_table_list text-center">
                            <div class="top-price-inner">
                                <h3>Premium plan</h3>
                                <div class="rates">
                                    <span class="prices">100%</span><span class="users">Monthly</span>
                                </div>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $1000</li>
                                <li class="check">Maximam Invest : $50000</li>
                                <li class="check">Avarage Monthly : 250% </li>
                            </ol>
                            <div class="price-btn">
                                <a class="blue" href="#">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Investment area -->

        <!--Start payment-history area -->
        <div class="payment-history-area fix area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline left-headline">
                            <h2>Payments update</h2>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
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
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m.png')}}" alt="">Admond sayhel</td>
                                                    <td>Jan 02, 2020</td>
                                                    <td>$1000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m1.png')}}" alt="">Jonshon</td>
                                                    <td>Dec 12, 2019</td>
                                                    <td>$5000</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m2.png')}}" alt="">Hopper</td>
                                                    <td>Dec 22, 2019</td>
                                                    <td>$4000</td>
                                                    <td>Ripple</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m3.png')}}" alt="">Admond sayhel</td>
                                                    <td>Jan 02, 2020</td>
                                                    <td>$3000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m4.png')}}" alt="">Anjel july</td>
                                                    <td>Jan 05, 2020</td>
                                                    <td>$500</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m5.png')}}" alt="">Lagisha</td>
                                                    <td>Jan 12, 2020</td>
                                                    <td>$5000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
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
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m.png')}}" alt="">Admond sayhel</td>
                                                    <td>Jan 02, 2020</td>
                                                    <td>$1000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m1.png')}}" alt="">Jonshon</td>
                                                    <td>Dec 12, 2019</td>
                                                    <td>$5000</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m2.png')}}" alt="">Hopper</td>
                                                    <td>Dec 22, 2019</td>
                                                    <td>$4000</td>
                                                    <td>Ripple</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m3.png')}}" alt="">Admond sayhel</td>
                                                    <td>Jan 02, 2020</td>
                                                    <td>$3000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m4.png')}}" alt="">Anjel july</td>
                                                    <td>Jan 05, 2020</td>
                                                    <td>$500</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{asset ('temp/asset/img/icon/m5.png')}}" alt="">Lagisha</td>
                                                    <td>Jan 12, 2020</td>
                                                    <td>$5000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
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

            <div class="container">
                <div class="row">

                <!-- <div class="row"> -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h2>Profit Calculater</h2>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
						</div>
					</div>
				<!-- </div> -->

                <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-profit-inner">
                        <div class="about-calculater">
                            <h3>CONTACT US</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy</p>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy</p>
                        </div>
                    </div>
                </div> -->
                    
                    <!-- End contact icon -->
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="contact-form">
                           <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/live-goldhyip/contact.php" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required="" data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required="" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required="" data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required="" data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="contact-btn">Submit</button>
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
                            <h3>ADDRESS</h3>
                            <h6>No 10 Mission Road, Nigeria</h6>                            
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-single">
                        <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <h3>ADDRESS</h3>
                            <h6>No 10 Mission Road, Nigeria</h6>                            
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-single">
                        <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <h3>ADDRESS</h3>
                            <h6>No 10 Mission Road, Nigeria</h6>                            
                        </div>
                    </div>                    
                </div>
                
            </div>
        </div>


        <div class="faq-area bg-color-2 area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>Important Faq</h2>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Column Start -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="company-faq-left">
                            <div class="faq_inner">
                                <div id="accordion">
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingOne">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. We are the best invest platform in the world? 
                                          </button>
                                        </h4>
                                      </div>

                                      <div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingTwo">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. World class creative experts team member?
                                          </button>
                                        </h4>
                                      </div>
                                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingThree">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3. Clients satisfaction make company value?
                                          </button>
                                        </h4>
                                      </div>
                                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingFour">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            4. How to successful our business plan?
                                          </button>
                                        </h4>
                                      </div>
                                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingFive">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                           5. How to possible to invest to profit?
                                          </button>
                                        </h4>
                                      </div>
                                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="company-faq">
                            <div class="faq_inner">
                                <div id="accordion_2">
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingSix">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            6. We are the best clean platform in the world? 
                                          </button>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion_2">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingSeven">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            7. World class creative experts team member?
                                          </button>
                                        </h4>
                                      </div>
                                      <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordion_2" style="">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingEight">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            8. Clients satisfaction make company value?
                                          </button>
                                        </h4>
                                      </div>
                                      <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion_2">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingNine">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            9. How to successful our business plan?
                                          </button>
                                        </h4>
                                      </div>
                                      <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion_2">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header white-bg" id="headingTen">
                                        <h4 class="faq-top-text">
                                          <button class="faq-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            10. How to change you life investment?
                                          </button>
                                        </h4>
                                      </div>
                                      <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion_2">
                                        <div class="card-body">
                                            When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being .
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End payment-history area -->
        <!-- Start Reviews Area -->
        <div class="reviews-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="testimonial-inner">
                            <div class="review-head">
                                <h2>Customer says about our company projects</h2>
                                <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy</p>
                                <a class="reviews-btn anti-btn" href="review.html">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="Reviews-content">
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel owl-carousel">
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="testi-img ">
                                                <img src="{{asset ('temp/asset/img/review/1.jpg')}}" alt="">
                                                <div class="guest-details">
                                                    <h4>Edward</h4>
                                                    <span class="guest-rev">Genarel customer</span>
                                                </div>
                                            </div>
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="testi-img ">
                                                <img src="{{asset ('temp/asset/img/review/2.jpg')}}" alt="">
                                                <div class="guest-details">
                                                    <h4>Charlotte</h4>
                                                    <span class="guest-rev">Genarel customer</span>
                                                </div>
                                            </div>
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="testi-img ">
                                                <img src="{{asset ('temp/asset/img/review/3.jpg')}}" alt="">
                                                <div class="guest-details">
                                                    <h4>Daniel</h4>
                                                    <span class="guest-rev">Genarel customer</span>
                                                </div>
                                            </div>
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="testi-img ">
                                                <img src="{{asset ('temp/asset/img/review/4.jpg')}}" alt="">
                                                <div class="guest-details">
                                                    <h4>Graham</h4>
                                                    <span class="guest-rev">Genarel customer</span>
                                                </div>
                                            </div>
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Reviews area -->

        <!-- Start Subscribe area -->
        <div class="subscribe-area bg-color">
            <div class="container">
                <div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="subscribe-inner">
						    <div class="subdcribe-content">
                                <div class="section-headline text-center">
                                    <h2>Payment methods</h2>
                                    <p>Help agencies to define their new business objectives and then create professional software.</p>
                                </div>
                                <div class="subs-form">
                                    <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/live-goldhyip/contact.php" class="contact-form">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <button type="submit" id="submit" class="add-btn">Subscribe</button>
                                    </form>  
                                </div>
                                <div class="brand-content">
                                    <div class="brand-carousel owl-carousel">
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{asset ('temp/asset/img/brand/1.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{asset ('temp/asset/img/brand/2.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{asset ('temp/asset/img/brand/3.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{asset ('temp/asset/img/brand/4.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{asset ('temp/asset/img/brand/5.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{asset ('temp/asset/img/brand/6.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{asset ('temp/asset/img/brand/7.png')}}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{asset ('temp/asset/img/brand/8.png')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe area -->
    </main>
    <!-- Start Footer Area -->
    <footer class="footer1">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="footer-content logo-footer">
                            <div class="footer-head">
                                <h4>About Goldhyip</h4>
                                <p>
                                    When replacing a selection. help agencies to define their new business objectives and then create. maintains the amount of lines. When replacing a selection. help agencies to define their.  maintains the amount of lines. When replacing a selection.
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
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Invest plan</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Silver plan</a></li>
                                    <li><a href="#">Gold plan</a></li>
                                    <li><a href="#">Platinum Plan</a></li>
                                    <li><a href="#">Diamond plan</a></li>
                                    <li><a href="#">Premium plan</a></li>
                                    <li><a href="#">Custom plan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="footer-content rs-mar-0">
                            <div class="footer-head">
                                <h4>Payments option</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Ripple coin</a></li>
                                    <li><a href="#">Bitcoin</a></li>
                                    <li><a href="#">Ethireum</a></li>
                                    <li><a href="#">Light coin</a></li>
                                    <li><a href="#">Coin base</a></li>
                                    <li><a href="#">Skrill card</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="footer-content rs-mar-0">
                            <div class="footer-head">
                                <h4>Accounts</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Signup</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Notification</a></li>
                                    <li><a href="#">Condition</a></li>
                                    <li><a href="#">Black night</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-xl-2 col-lg-2 col-md-4">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom Area -->
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>
                                Copyright © 2021
                                <a href="#">GOLDHYIP</a> All Rights Reserved
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom Area -->
    </footer>
    <!-- End Footer Area -->

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