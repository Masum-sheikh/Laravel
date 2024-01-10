@extends('dashboard.blank')
@section('mainContent')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>@yield('pageName')</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route("blogHome") }}"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route("profile") }}">@yield('1stPath')</a></li>
                            <li class="breadcrumb-item active">@yield('2ndPath')</li>
                        </ul>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
               @yield("colLgStart")
            </div>
        </div>
    </section>
@endsection
