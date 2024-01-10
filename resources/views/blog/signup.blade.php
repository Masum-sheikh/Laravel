@extends('blog.blank')
@section("pageTitle")
Stories -Sign Up
@endsection
@section('mainContent')
    <main class="bg-grey pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3 class="mb-30 font-weight-900">Sign Up</h3>
                            </div>
                            @if (session("Done"))
                            <div class="alert alert-success"><strong>{{ session("Done") }}</strong></div>
                            @endif
                            @if (session("invalidLink"))
                            <div class="alert alert-warning"><strong>{{ session("invalidLink") }}</strong></div>
                            @endif
                            <form method="post" action="{{ route("blogSignUpData") }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" required name="name"
                                        placeholder="Name">
                                    @error("name")
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required name="username"
                                        placeholder="Username">
                                    @error("username")
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required type="email" class="form-control" name="email"
                                        placeholder="Email">
                                     @error("email")
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required class="form-control" type="password" name="password"
                                        placeholder="Password">
                                    @error("password")
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required class="form-control" type="password" name="password_confirmation"
                                        placeholder="Confirm password">
                                    @error("password_confirmation")
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                {{-- <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox"
                                                id="exampleCheckbox1" value="">
                                            <label class="form-check-label" for="exampleCheckbox1"><span>I agree to terms
                                                    &amp; Policy.</span></label>
                                        </div>
                                    </div>
                                    <a class="text-muted" href="#">Lean more</a>
                                </div> --}}
                                <div class="form-group text-center">
                                    <button type="submit" class="button button-contactForm btn-block">
                                        Sign Up</button>
                                </div>
                            </form>

                            <div class="divider-text-center mt-15 mb-15">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center mb-15">
                                <li><a href="#" class="btn btn-facebook"><i
                                            class="elegant-icon social_facebook  mr-5"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i
                                            class="elegant-icon social_googleplus mr-5"></i>Google</a></li>
                            </ul>
                            <div class="text-muted text-center">Already have an account? <a href="{{ route("blogSignIn") }}">Sign in now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
