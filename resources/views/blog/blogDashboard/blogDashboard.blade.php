@extends('blog.blogDashboard.blank')
@section('blogDashboardHeaderLink')
    <link rel="stylesheet" href="{{ asset('dashboard') }}/plugins/jvectormap/jquery-jvectormap-2.0.3.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/blog.css">
@endsection
@section("blogDashboardActive")
active open
@endsection
@section('mainContent')
    <section class="content blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Blog Dashboard</h2>
                        <ul class="breadcrumb p-l-0 p-b-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body">
                            <h4 class="m-t-0 m-b-0">2,048</h4>
                            <p class="m-b-0">Total Leads</p>
                            <div class="sparkline" data-type="line" data-spot-Radius="3"
                                data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                                data-spot-Color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="40px"
                                data-line-Width="2" data-line-Color="#34495e" data-fill-Color="transparent">
                                7,6,7,8,5,9,8,6,7 </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body">
                            <h4 class="m-t-0 m-b-0">521</h4>
                            <p class="m-b-0 ">Total Connections</p>
                            <div class="sparkline" data-type="line" data-spot-Radius="3"
                                data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                                data-spot-Color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="42px"
                                data-line-Width="2" data-line-Color="#5394c9" data-fill-Color="transparent">
                                6,5,7,4,5,3,8,6,5 </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body">
                            <h4 class="m-t-0 m-b-0">73</h4>
                            <p class="m-b-0 ">Articles</p>
                            <div class="sparkline" data-type="line" data-spot-Radius="3"
                                data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                                data-spot-Color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="45px"
                                data-line-Width="2" data-line-Color="#37bf8d" data-fill-Color="transparent">
                                8,7,7,5,5,4,8,7,5 </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body">
                            <h4 class="m-t-0 m-b-0">15</h4>
                            <p class="m-b-0">Categories</p>
                            <div class="sparkline" data-type="line" data-spot-Radius="3"
                                data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                                data-spot-Color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="45px"
                                data-line-Width="2" data-line-Color="#f1c364" data-fill-Color="transparent">
                                7,6,7,8,5,9,8,6,7 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>Visitors</strong> Statistics</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <div id="world-map-markers" class="jvector-map"></div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Contrary</th>
                                                    <th>2016</th>
                                                    <th>2017</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>USA</td>
                                                    <td>2,009</td>
                                                    <td>3,591</td>
                                                    <td>7.01% <i class="zmdi zmdi-caret-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>India</td>
                                                    <td>1,129</td>
                                                    <td>1,361</td>
                                                    <td>3.01% <i class="zmdi zmdi-caret-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Canada</td>
                                                    <td>2,009</td>
                                                    <td>2,901</td>
                                                    <td>9.01% <i class="zmdi zmdi-caret-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Australia</td>
                                                    <td>954</td>
                                                    <td>901</td>
                                                    <td>5.71% <i class="zmdi zmdi-caret-down text-warning"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Japan</td>
                                                    <td>235</td>
                                                    <td>302</td>
                                                    <td>5.71% <i class="zmdi zmdi-caret-down text-warning"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>France</td>
                                                    <td>402</td>
                                                    <td>500</td>
                                                    <td>5.71% <i class="zmdi zmdi-caret-down text-warning"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Other</td>
                                                    <td>4,236</td>
                                                    <td>4,591</td>
                                                    <td>9.15% <i class="zmdi zmdi-caret-up text-success"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 col-md-7">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Popular</strong> Categories</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a class="boxs-close" href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body bg-dark">
                            <div id="line_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Latest</strong> Comments</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a class="boxs-close" href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="inbox-widget list-unstyled clearfix">
                                <li class="inbox-inner">
                                    <div class="inbox-item">
                                        <div class="inbox-img"> <img src="{{ asset('dashboard') }}/images/sm/avatar1.jpg"
                                                class="rounded" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">John Doe</p>
                                            <p class="inbox-message">Lorem Ipsum is simply dummy text of the been the
                                                industry's</p>
                                            <p class="inbox-date">12:34 PM</p>
                                        </div>
                                        <div class="hover_action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-favorite"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-check-circle"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="inbox-inner">
                                    <div class="inbox-item">
                                        <div class="inbox-img"> <img src="{{ asset('dashboard') }}/images/sm/avatar2.jpg"
                                                class="rounded" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">Maryam Amiri</p>
                                            <p class="inbox-message">Lorem Ipsum is simply dummyLorem Ipsum has been the
                                                industry's</p>
                                            <p class="inbox-date">10:34 AM</p>
                                        </div>
                                        <div class="hover_action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-favorite"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-check-circle"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="inbox-inner">
                                    <div class="inbox-item">
                                        <div class="inbox-img"><img src="{{ asset('dashboard') }}/images/sm/avatar5.jpg"
                                                class="rounded" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">Tim Hank</p>
                                            <p class="inbox-message">text of the industry. Lorem Ipsum has been the
                                                industry's</p>
                                            <p class="inbox-date">18:45 PM</p>
                                        </div>
                                        <div class="hover_action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-favorite"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-check-circle"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="inbox-inner">
                                    <div class="inbox-item">
                                        <div class="inbox-img"> <img src="{{ asset('dashboard') }}/images/sm/avatar6.jpg"
                                                class="rounded" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">Hossein Shams </p>
                                            <p class="inbox-message">text of the printing and has been the industry's</p>
                                            <p class="inbox-date">15:34 PM</p>
                                        </div>
                                        <div class="hover_action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-favorite"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-check-circle"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Social</strong> Media</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a class="boxs-close" href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive social_media_table">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Media</th>
                                            <th>Name</th>
                                            <th>Like</th>
                                            <th>Comments</th>
                                            <th>Share</th>
                                            <th>Members</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="social_icon linkedin"><i
                                                        class="zmdi zmdi-linkedin"></i></span>
                                            </td>
                                            <td><span class="list-name">Linked In</span>
                                                <span class="text-muted">Florida, United States</span>
                                            </td>
                                            <td>19K</td>
                                            <td>14K</td>
                                            <td>10K</td>
                                            <td>
                                                <span class="badge badge-success">2341</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon twitter-table"><i
                                                        class="zmdi zmdi-twitter"></i></span>
                                            </td>
                                            <td><span class="list-name">Twitter</span>
                                                <span class="text-muted">Arkansas, United States</span>
                                            </td>
                                            <td>7K</td>
                                            <td>11K</td>
                                            <td>21K</td>
                                            <td>
                                                <span class="badge badge-success">952</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon facebook"><i
                                                        class="zmdi zmdi-facebook"></i></span>
                                            </td>
                                            <td><span class="list-name">Facebook</span>
                                                <span class="text-muted">Illunois, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>8K</td>
                                            <td>
                                                <span class="badge badge-success">6127</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon google"><i
                                                        class="zmdi zmdi-google-plus"></i></span>
                                            </td>
                                            <td><span class="list-name">Google Plus</span>
                                                <span class="text-muted">Arizona, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>154</td>
                                            <td>
                                                <span class="badge badge-success">325</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon youtube"><i
                                                        class="zmdi zmdi-youtube-play"></i></span>
                                            </td>
                                            <td><span class="list-name">YouTube</span>
                                                <span class="text-muted">Alaska, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>200</td>
                                            <td>
                                                <span class="badge badge-success">160</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card single_post">
                        <div class="header">
                            <h2><strong>Latest</strong> Post</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);" class="boxs-close">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body m-b-10">
                            <div class="img-post">
                                <img src="{{ asset('dashboard') }}/images/blog/blog-page-4.jpg" alt="Awesome Image">
                                <div class="social_share">
                                    <a href="javascript:void(0);"
                                        class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                            class="zmdi zmdi-facebook"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                            class="zmdi zmdi-twitter"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                            class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <ul class="meta">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By:
                                        John Smith</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a>
                                </li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments:
                                        3</a></li>
                            </ul>
                            <h3 class="m-t-0"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal</p>
                            <a href="blog-details.html" title="read more" class="btn btn-round btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card single_post">
                        <div class="header">
                            <h2><strong>Popular</strong> Post</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);" class="boxs-close">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body m-b-10">
                            <ul class="meta">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By:
                                        John Smith</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a>
                                </li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments:
                                        3</a></li>
                            </ul>
                            <h3 class="m-t-0"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal</p>
                            <a href="blog-details.html" title="read more" class="btn btn-round btn-primary">Read More</a>
                        </div>
                        <div class="body">
                            <div class="img-post">
                                <img src="{{ asset('dashboard') }}/images/blog/blog-page-3.jpg" alt="Awesome Image">
                                <div class="social_share">
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                            class="zmdi zmdi-facebook"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                            class="zmdi zmdi-twitter"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                            class="zmdi zmdi-instagram"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('blogDashboradFooterScript')
    <script src="{{ asset('dashboard') }}/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ asset('dashboard') }}/js/pages/blog/blog.js"></script>
@endsection
