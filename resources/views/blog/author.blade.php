@extends('blog.blankWithBottom')
@section('pageTitle')
    {{ $author->name }}
@endsection
@section('mainContent')
 <!-- Start Main content -->
 <main class="bg-grey pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--author box-->
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
                        <h3 class="font-weight-900"><span class="vcard author"><span class="fn"><a href="{{ route('author', $author->id) }}" title="" rel="author">{{ $author->name }}</a></span></span>
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="post-module-2">
                    <div class="widget-header-2 position-relative mb-30  wow fadeInUp animated">
                        <h5 class="mt-5 mb-30">Posted by {{ $author->name }}</h5>
                    </div>
                </div>
                <div class="post-module-3">
                    <div class="loop-list loop-list-style-1">
                        @php
                            $posts = App\Models\Post::where("authorId", $author->id)->where("status", 1)->paginate(4);
                        @endphp
                        @foreach ($posts as $post)
                        <article class="hover-up-2 transition-normal wow fadeInUp animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ asset("uploads/post/coverImage/".$post->coverImage) }})">
                                            <a class="img-link" href="{{ route('postDetails', $post->slug) }}"></a>
                                        </div>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                            <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                            <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8 align-self-center">
                                    <div class="post-content">
                                        <div class="entry-meta meta-0 font-small mb-10">
                                            <a href="{{ route("categoryPosts", $post->categoryId) }}"><span class="post-cat text-primary">{{ $post->relToCategory()->first()->categoryName }}</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="{{ route('postDetails', $post->slug) }}">{{ $post->title }}</a>
                                            <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                        </h5>
                                        <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                            <span class="post-on">{{ $post->created_at->diffForHumans() }}</span>
                                            <span class="time-reading has-dot">11 mins read</span>
                                            <span class="post-by has-dot">3k views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>


                <div class="pagination-area mb-30 wow fadeInUp animated">
                    {!! $posts->links() !!}
                </div>

            </div>
            <div class="col-lg-4 primary-sidebar sticky-sidebar">
                <div class="widget-area">
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->
@endsection
