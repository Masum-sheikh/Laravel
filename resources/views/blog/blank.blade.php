<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("pageTitle")</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('blog') }}/imgs/theme/favicon.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{ asset('blog') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('blog') }}/css/widgets.css">
    <link rel="stylesheet" href="{{ asset('blog') }}/css/dark.css">
    <link rel="stylesheet" href="{{ asset('blog') }}/css/responsive.css">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <!--     <div class="preloader text-center">
        <div class="circle"></div>
    </div> -->
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Categories-->
            <div class="sidebar-widget widget_categories mb-50 mt-30">
                <div class="widget-header-2 position-relative">
                    <h5 class="mt-5 mb-15">Hot topics</h5>
                </div>
                <div class="widget_nav_menu">
                    <ul>
                        <li class="cat-item cat-item-2"><a href="category.html">Travel tips</a> <span
                                class="post-count">30</span></li>
                        <li class="cat-item cat-item-3"><a href="category-grid.html">Book review</a> <span
                                class="post-count">25</span></li>
                        <li class="cat-item cat-item-4"><a href="category-list.html">Hotel review</a> <span
                                class="post-count">16</span></li>
                        <li class="cat-item cat-item-5"><a href="category-masonry.html">Destinations </a> <span
                                class="post-count">22</span></li>
                        <li class="cat-item cat-item-6"><a href="category-big.html">Lifestyle</a> <span
                                class="post-count">25</span></li>
                    </ul>
                </div>
            </div>
            <!--Latest-->
            <div class="sidebar-widget widget-latest-posts mb-50">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Don't miss</h5>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div
                                    class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="{{ asset('blog') }}/imgs/news/thumb-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The
                                            Life of a Travel Writer with David Farley</a></h6>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on">05 August</span>
                                        <span class="post-by has-dot">300 views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div
                                    class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="{{ asset('blog') }}/imgs/news/thumb-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Why
                                            Don’t More Black American Women Travel Solo?</a></h6>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on">12 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div
                                    class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="{{ asset('blog') }}/imgs/news/thumb-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The
                                            22 Best Things to See and Do in Bangkok</a></h6>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Ads-->
            <div class="sidebar-widget widget-ads">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Advertise banner</h5>
                </div>
                <a href="https://themeforest.net/user/alithemes/portfolio" target="_blank">
                    <img class="advertise-img border-radius-5" src="{{ asset('blog') }}/imgs/ads/ads-1.jpg"
                        alt="">
                </a>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="{{ route("blogHome") }}"><img class="logo" src="{{ asset('blog') }}/imgs/theme/logo.png"
                                alt=""></a>
                    </div>

                    <div class="col-md-9 col-xs-6 text-end header-top-right ">
                        <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i
                                    class="elegant-icon icon_search mr-5"></i>Search</span></button>
                        <div class="dark-light-mode-cover">
                            <a class="dark-light-mode" href="#"></a>
                        </div>
                        <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>

                        @auth("author")
                        <ul class="list-inline nav-topbar d-none d-md-inline">

                            <li style="border-radius: 2px;  background-color: #5151fc" class="">
                                <a style="color: white!important; font-size: 18px; padding: .5px 5px" class="" href="#"><b>{{ Auth::guard('author')->user()->name }}</b></a>

                                <ul class="sub-menu">

                                    <li><a style="font-size: 12px!important; border-right: 3px solid blue; padding: 0;" href="#"><b>- Profile</b></a></li>
                                    @if(Auth::guard('author')->user()->authorStatus == null)

                                    @if (App\Models\author_request::where("email", Auth::guard('author')->user()->email)->exists())
                                    <li><a style="color: green; font-size: 12px!important; border-right: 2px solid red; padding: 0;"><strong>- Approval pending</strong></a></li>
                                    @else
                                    <li><a style="font-size: 12px!important; border-right: 3px solid yellow; padding: 0;" href="{{ route("requestForAuthor") }}"><b>- Request for Author</b></a></li>
                                    @endif

                                    @else
                                    <li><a target="_blank" style="font-size: 12px!important; border-right: 3px solid rgb(0, 255, 255); padding: 0;" href="{{ route("blogUserDashboard") }}">- Dashborad</a></li>
                                    @endif
                                    <li><a style="color: red; font-size: 12px!important; border-right: 3px solid rgb(30, 255, 0); padding: 0;" href="{{ route("blogSignOut") }}"><b>- Sign out</b></a></li>

                                </ul>
                            </li>

                        </ul>

                        @else
                        <a class="btn btn-radius bg-primary text-white ml-15 font-small box-shadow" href="{{ route('blogSignIn') }}" target="_self">Sign in</a>
                        @endauth

                    </div>


                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center position-relative">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-start">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li>
                                <a href="{{ route("blogHome") }}"> <i class="elegant-icon icon_house_alt mr-5"></i> Home</a>
                            </li>
                            <li><a href="category-list.html">Travel</a> </li>

                            <li class="current-item has-mega-menu">
                                <a href="category-list.html">Mega Menu</a>
                                <ul class="mega-menu">
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Travel Blog</a>
                                        <ul>
                                            <li><a href="category-list.html">Destinations</a></li>
                                            <li><a href="category-list.html">Tour Guides</a></li>
                                            <li><a href="category-list.html">Travel Food</a></li>
                                            <li><a href="category-list.html">Hotels Booking</a></li>
                                            <li><a href="category-list.html">Transport Review</a></li>
                                            <li><a href="category-list.html">Travel Healthy</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Fruit &amp; Vegetables</a>
                                        <ul>
                                            <li><a href="category-list.html">Meat &amp; Poultry</a></li>
                                            <li><a href="category-list.html">Fresh Vegetables</a></li>
                                            <li><a href="category-list.html">Herbs &amp; Seasonings</a></li>
                                            <li><a href="category-list.html">Cuts &amp; Sprouts</a></li>
                                            <li><a href="category-list.html">Exotic Fruits &amp; Veggies</a></li>
                                            <li><a href="category-list.html">Packaged Produce</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Breakfast &amp; Dairy</a>
                                        <ul>
                                            <li><a href="category-list.html">Milk &amp; Flavoured Milk</a></li>
                                            <li><a href="category-list.html">Butter and Margarine</a></li>
                                            <li><a href="category-list.html">Eggs Substitutes</a></li>
                                            <li><a href="category-list.html">Marmalades</a></li>
                                            <li><a href="category-list.html">Sour Cream</a></li>
                                            <li><a href="category-list.html">Cheese</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Meat &amp; Seafood</a>
                                        <ul>
                                            <li><a href="category-list.html">Breakfast Sausage</a></li>
                                            <li><a href="category-list.html">Dinner Sausage</a></li>
                                            <li><a href="category-list.html">Chicken</a></li>
                                            <li><a href="category-list.html">Sliced Deli Meat</a></li>
                                            <li><a href="category-list.html">Wild Caught Fillets</a></li>
                                            <li><a href="category-list.html">Crab and Shellfish</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li> <a href="category-grid.html">Guides</a> </li>
                            <li> <a href="category-masonry.html">Food</a> </li>
                            <li> <a href="category-big.html">Hotels</a> </li>
                            <li> <a href="category.html">Review</a> </li>
                            <li> <a href="category.html">Healthy </a> </li>
                            <li> <a href="category.html">Lifestyle</a> </li>
                            <li> <a href="category.html">Blog</a> </li>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="{{ route("blogHome") }}">Home</a>

                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="page-about.html">About</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-typography.html">Typography</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-search.html">Search</a></li>
                                    <li><a href="page-author.html">Author</a></li>
                                    <li><a href="page-404.html">404 page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Category</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="category-list.html">List layout</a></li>
                                    <li><a href="category-grid.html">Grid layout</a></li>
                                    <li><a href="category-masonry.html">Masonry layout</a></li>
                                    <li><a href="category-big.html">Big layout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Single post</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="single.html">Default</a></li>
                                    <li><a href="single-2.html">Big image</a></li>
                                    <li><a href="single-3.html">Left image</a></li>
                                    <li><a href="single-4.html">With sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="float-end header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                    <div class="off-canvas-toggle-cover d-inline-block">
                        <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control"
                                    placeholder="Search stories, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80 text-center">
                    <div class="col-12 font-small suggested-area">
                        <h5 class="suggested font-heading mb-20 text-muted"> <strong>Suggested keywords:</strong></h5>
                        <ul class="list-inline d-inline-block">
                            <li class="list-inline-item"><a href="category.html">World</a></li>
                            <li class="list-inline-item"><a href="category.html">American</a></li>
                            <li class="list-inline-item"><a href="category.html">Opinion</a></li>
                            <li class="list-inline-item"><a href="category.html">Tech</a></li>
                            <li class="list-inline-item"><a href="category.html">Science</a></li>
                            <li class="list-inline-item"><a href="category.html">Books</a></li>
                            <li class="list-inline-item"><a href="category.html">Travel</a></li>
                            <li class="list-inline-item"><a href="category.html">Business</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-lg-4">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('blog') }}/imgs/news/thumb-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Travel Tips</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('blog') }}/imgs/news/thumb-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Lifestyle</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('blog') }}/imgs/news/thumb-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Hotel Review</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Main content -->
    @yield('mainContent')
    <!-- End Main content -->




     <!-- Footer Start-->
     <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget wow fadeInUp animated mb-30">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">About</h5>
                        </div>
                        <div class="textwidget">
                            <p>
                                Start writing, no matter what. The water does not flow until the faucet is turned on.
                            </p>
                            <p><strong class="color-black">Address</strong><br>
                                123 Main Street<br>
                                Bangladesh, NY 10001</p>
                            <p><strong class="color-black">Follow</strong><br>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <li class="list-inline-item"><a class="fb" href="#" target="_blank"
                                        title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="tw" href="#" target="_blank"
                                        title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li class="list-inline-item"><a class="pt" href="#" target="_blank"
                                        title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Quick link</h5>
                        </div>
                        <ul class="font-small">
                            <li class="cat-item cat-item-2"><a href="{{ route("about") }}">About</a></li>
                            <li class="cat-item cat-item-4"><a>Help & Support</a></li>
                            <li class="cat-item cat-item-5"><a>​​Licensing Policy</a></li>
                            <li class="cat-item cat-item-6"><a>Refund Policy</a></li>
                            <li class="cat-item cat-item-7"><a href="{{ route("contact") }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Tagcloud</h5>
                        </div>
                        <div style="text-align: justify !important" class="tagcloud mt-50">
                            @php
                                $tags = App\Models\Tag::orderBy('tagName')
                                    ->take(5)
                                    ->get();
                            @endphp
                            @foreach ($tags as $tag)
                                <a class="tag-cloud-link" href="category.html">{{ $tag->tagName }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Newsletter</h5>
                        </div>
                        <div class="newsletter">
                            <p class="font-medium">Subscribe to our newsletter and get our newest updates right on
                                your inbox.</p>
                            <form class="input-group form-subcriber mt-30 d-flex">
                                <input required type="email" class="form-control bg-white font-small"
                                    placeholder="Enter your email">
                                <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                                <label class="mt-20"> <input class="mr-5" name="name" type="checkbox"
                                        value="1" required=""> I agree to the <a href="#"
                                        target="_blank">terms &amp; conditions</a> </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-start font-small text-muted">© 2023, Stories - Blog</p>
                <p class="float-md-end font-small text-muted">
                    Design by <a href="https://fb.com/sehabkhanzehad" target="_blank">Zehad</a> | All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Footer Start-->
    {{-- <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget wow fadeInUp animated mb-30">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">About me</h5>
                        </div>
                        <div class="textwidget">
                            <p>
                                Start writing, no matter what. The water does not flow until the faucet is turned on.
                            </p>
                            <p><strong class="color-black">Address</strong><br>
                                123 Main Street<br>
                                New York, NY 10001</p>
                            <p><strong class="color-black">Follow me</strong><br>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <li class="list-inline-item"><a class="fb" href="#" target="_blank"
                                        title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="tw" href="#" target="_blank"
                                        title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li class="list-inline-item"><a class="pt" href="#" target="_blank"
                                        title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Quick link</h5>
                        </div>
                        <ul class="font-small">
                            <li class="cat-item cat-item-2"><a href="#">About me</a></li>
                            <li class="cat-item cat-item-4"><a href="#">Help & Support</a></li>
                            <li class="cat-item cat-item-5"><a href="#">​​Licensing Policy</a></li>
                            <li class="cat-item cat-item-6"><a href="#">Refund Policy</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Hire me</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Tagcloud</h5>
                        </div>
                        <div class="tagcloud mt-50">
                            <a class="tag-cloud-link" href="category.html">beautiful</a>
                            <a class="tag-cloud-link" href="category.html">New York</a>
                            <a class="tag-cloud-link" href="category.html">droll</a>
                            <a class="tag-cloud-link" href="category.html">intimate</a>
                            <a class="tag-cloud-link" href="category.html">loving</a>
                            <a class="tag-cloud-link" href="category.html">travel</a>
                            <a class="tag-cloud-link" href="category.html">fighting </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Newsletter</h5>
                        </div>
                        <div class="newsletter">
                            <p class="font-medium">Subscribe to our newsletter and get our newest updates right on
                                your inbox.</p>
                            <form class="input-group form-subcriber mt-30 d-flex">
                                <input type="email" class="form-control bg-white font-small"
                                    placeholder="Enter your email">
                                <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                                <label class="mt-20"> <input class="mr-5" name="name" type="checkbox"
                                        value="1" required=""> I agree to the <a href="#"
                                        target="_blank">terms &amp; conditions</a> </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-start font-small text-muted">© 2023, Stories - Personal Blog HTML Template </p>
                <p class="float-md-end font-small text-muted">
                    Design by <a href="https://alithemes.com/" target="_blank">AliThemes</a> | All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer --> --}}
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="{{ asset('blog') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/popper.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery.slicknav.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/slick.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/wow.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery.ticker.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery.vticker-min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery.magnific-popup.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery.sticky.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/perfect-scrollbar.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/waypoints.min.js"></script>
    <script src="{{ asset('blog') }}/js/vendor/jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="{{ asset('blog') }}/js/main.js"></script>
</body>
</html>
