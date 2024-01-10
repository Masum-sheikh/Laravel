@extends('blog.blank')
@section("pageTitle")
Stories -Sign In
@endsection
@section('mainContent')
    <main class="bg-grey pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3 class="mb-30 font-weight-900">Sign In</h3>
                            </div>
                            @if (session("reset"))
                            <div class="alert alert-success"><strong>{{ session("reset") }}</strong></div>
                            @endif
                            @if (session("Verified"))
                            <div class="alert alert-success"><strong>{{ session("Verified") }}</strong></div>
                            @endif
                            @if (session("notVerified"))
                            <div class="alert alert-warning"><strong>{{ session("notVerified") }}</strong></div>
                            @endif
                            <form action="{{ route("blogSignInData") }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="email"
                                        placeholder="Your Email">
                                    @error("email")
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                    @if (session("Invalid"))
                                    <strong class="text-danger">{{ session("Invalid") }}</strong>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password"
                                        placeholder="Password">
                                        @error("password")
                                        <strong class="text-danger">{{ $message }}</strong>
                                         @enderror
                                         @if (session("Wrong"))
                                    <strong class="text-danger">{{ session("Invalid") }}</strong>
                                    @endif
                                </div>
                                <div class="login_footer form-group">
                                    {{-- <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox"
                                                id="exampleCheckbox1" value="">
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember
                                                    me</span></label>
                                        </div>
                                    </div> --}}
                                    <a class="text-muted" href="{{ route("forgotPassword") }}">Forgot password?</a>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="button button-contactForm btn-block">Log in</button>
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
                            <div class="text-muted text-center">Don't Have an Account? <a href="{{ route("blogSignUp") }}">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
