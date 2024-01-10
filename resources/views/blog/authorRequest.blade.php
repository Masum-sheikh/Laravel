@extends('blog.blank')
@section('pageTitle')
    Stories -Author Request
@endsection
@section('mainContent')
    <main class="bg-grey pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3 class="mb-30 font-weight-900">Request For Author</h3>
                            </div>
                            @if (session('Invalid'))
                                <div class="alert alert-warning text-center">
                                    <strong class="text-danger">{{ session('Invalid') }}
                                        <a href="{{ route('blogSignUp') }}">click here.</a>
                                    </strong>
                                </div>
                            @endif
                            @if (session('Done'))
                                <div class="alert alert-success text-center">
                                    <strong>{{ session('Done') }}</strong>
                                </div>
                            @endif

                            <form action="{{ route('requestForAuthorData') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                    @error('email')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror

                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="button button-contactForm btn-block">Send</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
