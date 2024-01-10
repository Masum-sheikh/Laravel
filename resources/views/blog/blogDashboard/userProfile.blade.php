@extends('blog.blogDashboard.blank');
@section('title')
    Profile
@endsection
@section('mainContent')
    <section class="content profile-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Profile</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Profile</a></li>
                            <li class="breadcrumb-item active">Setting</li>
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
                <div class="col-lg-4 col-md-4">
                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Personal</strong> Information</h2>
                            </div>
                            <div class="body">
                                @if (session("saved"))
                                <div class="alert alert-success"><strong>{{ session("saved") }}</strong></div>
                                @endif
                                <form method="POST" action="{{ route("personalInformation", Auth::guard("author")->user()->username) }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" value="{{ Auth::guard("author")->user()->username }}" name="username">
                                        @error("username")
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ Auth::guard("author")->user()->name }}">
                                        @error("name")
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ Auth::guard("author")->user()->email }}">
                                        @error("email")
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-info btn-round">Save Changes</button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <input id="procheck1" type="checkbox">
                                            <label for="procheck1">Profile Visibility For Everyone</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck2" type="checkbox">
                                            <label for="procheck2">New task notifications</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck3" type="checkbox">
                                            <label for="procheck3">New friend request notifications</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Change</strong> Password</h2>
                            </div>
                            <div class="body">
                                @if (session(""))
                                <div class="alert alert-success"><strong>{{ session("saved") }}</strong></div>
                                @endif

                                <form method="POST" action="{{ route("changePasswordData", Auth::guard("author")->user()->username) }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Current Password" name="currentPassword">
                                        @error("currentPassword")
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                                        @error("newPassword")
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
                                        @error("confirmPassword")
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-info btn-round">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Profile</strong> Photo</h2>
                            </div>
                            <div class="body">
                                @if (session("done"))
                                <div class="alert alert-success"><strong>{{ session("done") }}</strong></div>
                                @endif

                                <form method="POST" action="{{ route("photoData", Auth::guard("author")->user()->username) }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <input type="file" class="form-control" name="photo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" >
                                        @error("photo")
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    {{-- <input type="hidden" name="name" value="{{ $bid->id }}"> --}}

                                    <div class="form-group">
                                        @if (Auth::guard('author')->user()->image == null)
                                        <img height="80" id="blah" src="{{ Avatar::create(Auth::guard('author')->user()->name)->toBase64() }}" />
                                    @else
                                        <img height="80" id="blah" src="{{ asset('uploads/user/profile/'.Auth::guard('author')->user()->image) }}" alt="User" />
                                    @endif
                                    </div>

                                    <button type="submit" class="btn btn-info btn-round">Save Changes</button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <input id="procheck1" type="checkbox">
                                            <label for="procheck1">Profile Visibility For Everyone</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck2" type="checkbox">
                                            <label for="procheck2">New task notifications</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck3" type="checkbox">
                                            <label for="procheck3">New friend request notifications</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
