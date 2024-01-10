@extends('blog.blankWithBottom')
@section('pageTitle')
    Author
@endsection
@section('mainContent')
    <!-- Start Main content -->
    <main class="bg-grey pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--author box-->
                    {{-- <div class="author-bio mb-50 bg-white p-30 border-radius-10">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="assets/imgs/authors/author.jpg" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h3 class="font-weight-900"><span class="vcard author"><span class="fn"><a href="author.html" title="Posts by Steven" rel="author">Steven</a></span></span>
                        </h3>
                        <h5 class="text-muted">About author</h5>
                        <div class="author-description text-muted">You should write because you love the shape of stories and sentences and the creation of different words on a page. Graduating from a top accelerator or incubator can be as career-defining for a startup founder as an
                            elite university diploma.</div>
                        <strong class="text-muted">Follow: </strong>
                        <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                            <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
                    @foreach ($authors as $author)
                        <div class="author-bio mb-50 bg-white p-30 border-radius-10">
                            <div class="author-image mb-30">
                                <a href="{{ route('author', $author->id) }}">
                                    @if ($author->image == null)
                                        <img class="avatar" width="50"
                                            src="{{ Avatar::create($author->name)->toBase64() }}" />
                                    @else
                                        <img width="50" src="{{ asset('uploads/user/profile/'.$author->image) }}" alt="User">
                                    @endif
                                </a>
                            </div>

                            <div class="author-info">
                                <h3 class="font-weight-900"><span class="vcard author"><span class="fn"><a
                                                href="{{ route('author', $author->id) }}" title=""
                                                rel="author">{{ $author->name }}</a></span></span>
                                </h3>
                                <h5 class="text-muted">About author</h5>
                                <div class="author-description text-muted">You should write because you love the shape of
                                    stories and sentences and the creation of different words on a page. Graduating from a
                                    top accelerator or incubator can be as career-defining for a startup founder as an
                                    elite university diploma.</div>
                                <strong class="text-muted">Follow: </strong>
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
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection
