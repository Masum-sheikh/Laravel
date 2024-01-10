@extends('blog.blank')
@section('pageTitle')
    Stories -Forgot Passwrd
@endsection
@section('mainContent')
    <main class="bg-grey pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3 class="mb-30 font-weight-900">Account Recovery</h3>
                            </div>
                            @if (session("invalid"))
                            <div class="alert alert-warning"><strong>{{ session("invalid") }}</strong></div>
                            @endif
                            @if (session("sent"))
                            <div class="alert alert-success"><strong>{{ session("sent") }}</strong></div>
                            @endif
                            @if (session("invalidLink"))
                            <div class="alert alert-warning"><strong>{{ session("invalidLink") }}</strong></div>
                            @endif
                            <form action="{{ route('forgotPasswordEmail') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email*">
                                    @error('email')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="button button-contactForm btn-block">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
