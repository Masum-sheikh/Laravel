@extends('blog.blankWithBottom')
@section('pageTitle')
    Post Details
@endsection
@php
    $author = App\Models\blog_user::where('id', $postDetails->authorId)->first();
    $authorDetails = App\Models\blog_user::find($author->id);
@endphp
@section('mainContent')
    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <h1 class="entry-title mb-50 font-weight-900">
                    {{ $postDetails->title }}
                </h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <a class="author-avatar" href="{{ route('author', $authorDetails->id) }}">
                                    @if ($authorDetails->image == null)
                                        <img src="{{ Avatar::create($authorDetails->name)->toBase64() }}" alt="User" />
                                    @else
                                        <img class="img-circle"
                                            src="{{ asset('uploads/user/profile/' . $authorDetails->image) }}"
                                            alt="User">
                                    @endif
                                </a>
                                By <a href="{{ route('author', $authorDetails->id) }}"><span
                                        class="author-name font-weight-bold">{{ $authorDetails->name }}</span></a>
                            </p>
                            <span class="mr-10">{{ $postDetails->created_at->diffForHumans() }}</span>
                            <span class="has-dot">{{ $totalviews }} views</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-inline">
                        <ul class="header-social-network d-inline-block list-inline mr-15">
                            <li class="list-inline-item text-muted"><span>Share this: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank"
                                    href="#"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"
                                    href="#"><i class="elegant-icon social_twitter "></i></a></li>
                            <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank"
                                    href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-10">
                <img class="border-radius-10" src="{{ asset('uploads/post/coverImage/' . $postDetails->coverImage) }}"
                    alt="post-title" />
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50">
                {!! $postDetails->details !!}

                {{-- <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">
                        <span>Tags: </span>
                        <a href="category.html" rel="tag">deer</a>
                        <a href="category.html" rel="tag">nature</a>
                        <a href="category.html" rel="tag">conserve</a>
                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated">
                    <div class="entry-meta meta-1 font-small color-grey float-start mt-10">
                        <span class="hit-count mr-15"><i class="elegant-icon icon_comment_alt mr-5"></i>182 comments</span>
                        <span class="hit-count mr-15"><i class="elegant-icon icon_like mr-5"></i>268 likes</span>
                        <span class="hit-count"><i class="elegant-icon icon_star-half_alt mr-5"></i>Rate: 9/10</span>
                    </div>
                    <ul class="header-social-network d-inline-block list-inline float-md-end mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                </div> --}}
                <!--author box-->
                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="{{ route('author', $authorDetails->id) }}">

                            @if ($authorDetails->image == null)
                                <img class="avatar" src="{{ Avatar::create($authorDetails->name)->toBase64() }}" />
                            @else
                                <img class="img-circle" src="{{ asset('uploads/user/profile/' . $authorDetails->image) }}"
                                    alt="User">
                            @endif
                        </a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a
                                        href="{{ route('author', $authorDetails->id) }}" title="Posted by Barbara Cartland"
                                        rel="author">{{ $authorDetails->name }}</a></span></span>
                        </h4>
                        <h5 class="text-muted">About author</h5>
                        <div class="author-description text-muted">You should write because you love the shape of stories
                            and sentences and the creation of different words on a page. </div>
                        <a href="{{ route('author', $authorDetails->id) }}" class="author-bio-link mb-md-0 mb-3">View all
                            posts ({{ App\Models\Post::where('authorId', $authorDetails->id)->count() }})</a>
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i
                                            class="ti-pinterest"></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i
                                            class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <!--related posts-->
                <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Related posts</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative"
                                                style="background-image: url(assets/imgs/news/news-13.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook"
                                                        target="_blank"><i class="elegant-icon social_facebook"></i></a>
                                                </li>
                                                <li><a class="tw" href="#" target="_blank"
                                                        title="Tweet now"><i class="elegant-icon social_twitter"></i></a>
                                                </li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                            class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span
                                                        class="post-cat text-primary">Food</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="single.html">Helpful Tips for Working from Home as a
                                                    Freelancer</a>
                                                <span class="post-format-icon"><i
                                                        class="elegant-icon icon_star_alt"></i></span>
                                            </h5>
                                            <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                <span class="post-on">7 August</span>
                                                <span class="time-reading has-dot">11 mins read</span>
                                                <span class="post-by has-dot">3k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative"
                                                style="background-image: url(assets/imgs/news/news-4.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook"
                                                        target="_blank"><i class="elegant-icon social_facebook"></i></a>
                                                </li>
                                                <li><a class="tw" href="#" target="_blank"
                                                        title="Tweet now"><i class="elegant-icon social_twitter"></i></a>
                                                </li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                            class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span
                                                        class="post-cat text-success">Cooking</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="single.html">10 Easy Ways to Be Environmentally Conscious At
                                                    Home</a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                <span class="post-on">27 Sep</span>
                                                <span class="time-reading has-dot">10 mins read</span>
                                                <span class="post-by has-dot">22k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!--More posts-->
                <div class="single-more-articles border-radius-5">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">You might be interested in</h5>
                        <button class="single-more-articles-close"><i class="elegant-icon icon_close"></i></button>
                    </div>
                    <div class="post-block-list post-module-1 post-module-5">
                        <ul class="list-post">
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div
                                        class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="single.html">
                                            <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                href="single.html">The Best Time to Travel to Cambodia</a></h6>
                                        <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                            <span class="post-on">27 Jan</span>
                                            <span class="post-by has-dot">13k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-10">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div
                                        class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="single.html">
                                            <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">20
                                                Photos to Inspire You to Visit Cambodia</a></h6>
                                        <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                            <span class="post-on">27 August</span>
                                            <span class="post-by has-dot">14k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <!--Comments-->
                <div class="comments-area">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Comments</h5>
                    </div>
                    @foreach ($comments as $comment)
                        <div class="comment-list wow fadeIn animated">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">

                                    @php
                                        $user = App\Models\blog_user::where('id', $comment->userId)->first();
                                    @endphp

                                    <div class="thumb">
                                        @if ($user->image == null)
                                            <img src="{{ Avatar::create($user->name)->toBase64() }}" alt="User" />
                                        @else
                                            <img src="{{ asset('uploads/user/profile/' . $user->image) }}" alt="User">
                                        @endif
                                    </div>

                                    <div class="desc">
                                        <p class="comment">{{ $comment->comment }}</p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="{{ route('author', $user->id) }}">{{ $user->name }}</a>
                                                </h5>

                                                <p class="date">{{ $comment->created_at->diffForHumans() }}</p>
                                            </div>
                                            <div class="reply-btn" style="margin-left: 30px">
                                                <a href="#commentReply" data-parent="{{ $comment->id }}"
                                                    class="btn-reply"><b>Reply</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($comment->replies as $reply)
                                <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                                    <div class="user justify-content-between d-flex">
                                        @php
                                            $replyUser = App\Models\blog_user::where('id', $reply->userId)->first();
                                        @endphp
                                        <div class="thumb">
                                            @if ($replyUser->image == null)
                                                <img src="{{ Avatar::create($replyUser->name)->toBase64() }}"
                                                    alt="User" />
                                            @else
                                                <img src="{{ asset('uploads/user/profile/' . $replyUser->image) }}"
                                                    alt="User">
                                            @endif
                                        </div>
                                        <div class="desc">
                                            <p class="comment">{{ $reply->comment }}</p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a
                                                            href="{{ route('author', $replyUser->id) }}">{{ $replyUser->name }}</a>
                                                    </h5>
                                                    <p class="date">{{ $reply->created_at->diffForHumans() }}</p>
                                                </div>
                                                <div class="reply-btn" style="margin-left: 30px">
                                                    <a href="#commentReply" data-parent="{{ $comment->id }}"
                                                        class="btn-reply"><b>Reply</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <hr>
                    @endforeach


                </div>
                @auth('author')
                    <!--comment form-->
                    <div class="comment-form wow fadeIn animated" id="commentReply">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Leave a Reply</h5>
                        </div>

                        <form class="form-contact comment_form" action="{{ route('commentData') }}" method="POST"
                            id="commentForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                    </div>
                                </div>`
                                {{-- <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text"
                                        placeholder="Website">
                                </div>
                            </div> --}}
                            </div>
                            <input type="hidden" name="postId" value="{{ $postDetails->id }}">
                            <input type="hidden" name="parentId" id="parentId">
                            <div class="form-group">
                                <button type="submit" class="btn button button-contactForm">Post Comment</button>
                            </div>
                        </form>
                    </div>
                @endauth

            </article>
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->
@endsection

@section('fotterScript')
    <script>
        $(".btn-reply").click(function() {
            var parentId = $(this).attr("data-parent");
            $("#parentId").attr("value", parentId);
        });
    </script>
@endsection
