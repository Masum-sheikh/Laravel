@extends('blog.blankWithBottom')
@section('pageTitle')
    Stories -Home
@endsection
@section('mainContent')
    <main>
        <div class="featured-slider-2">

            <div class="featured-slider-2-items">
                @foreach ($posts as $post)
                    <div class="slider-single">
                        <div class="post-thumb position-relative">

                            <div class="thumb-overlay position-relative"
                                style="background-image: url({{ asset('uploads') }}/post/coverImage/{{ $post->coverImage }})">
                                <div class="post-content-overlay">
                                    <div class="container">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="{{ route('categoryPosts', $post->categoryId) }}" tabindex="0"><span
                                                    class="post-cat text-info text-uppercase">{{ $post->relToCategory()->first()->categoryName }}</span></a>
                                            {{-- <a href="category.html" tabindex="0"><span
                                                class="post-cat text-warning text-uppercase">Animal</span></a> --}}
                                        </div>
                                        <h1 class="post-title mb-20 font-weight-900 text-white">
                                            <a class="text-white" href="{{ route('postDetails', $post->slug) }}"
                                                tabindex="0">{{ $post->title }}</a>
                                        </h1>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">{{ $post->created_at->diffForHumans() }}</span>
                                            <span class="hit-count has-dot">
                                                @if (App\Models\popularPost::where('postId', $post->id)->exists())
                                                    {{ App\Models\popularPost::where('postId', $post->id)->first()->totalRead }}
                                                @else
                                                    0
                                                @endif
                                                Views
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container position-relative">
                {{-- <div class="arrow-cover color-white">
                </div> --}}
                <div class="featured-slider-2-nav-cover">
                    <div class="featured-slider-2-nav">
                        @foreach ($posts as $post)
                            <div class="slider-post-thumb mr-15 mt-20 position-relative">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5">
                                        <img class="border-radius-5"
                                            src="{{ asset('uploads') }}/post/thumbnail/{{ $post->thumbnail }}"
                                            alt="">
                                    </div>
                                    <div class="post-content media-body text-white">
                                        <h5 class="post-title mb-15 text-limit-2-row">{{ $post->title }}</h5>
                                        <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                            <span
                                                class="post-on text-white">{{ $post->created_at->diffForHumans() }}</span>
                                            <span class="post-by has-dot text-white">
                                                @if (App\Models\popularPost::where('postId', $post->id)->exists())
                                                    {{ App\Models\popularPost::where('postId', $post->id)->first()->totalRead }}
                                                @else
                                                    0
                                                @endif
                                                views
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="slider-post-thumb mr-15 mt-20 position-relative">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5">
                                    <img class="border-radius-5" src="{{ asset('blog') }}/imgs/news/thumb-17.jpg"
                                        alt="">
                                </div>
                                <div class="post-content media-body text-white">
                                    <h5 class="post-title mb-15 text-limit-2-row">Abstract Australia from Above</h5>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on text-white">15 Sep</span>
                                        <span class="post-by has-dot text-white">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-post-thumb mr-15 mt-20 position-relative">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5">
                                    <img class="border-radius-5" src="{{ asset('blog') }}/imgs/news/thumb-18.jpg"
                                        alt="">
                                </div>
                                <div class="post-content media-body text-white">
                                    <h5 class="post-title mb-15 text-limit-2-row">Tips for Scuba Diving the Great
                                        Barrier Reef</h5>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on text-white">18 Sep</span>
                                        <span class="post-by has-dot text-white">17k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-post-thumb mr-15 mt-20 position-relative">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5">
                                    <img class="border-radius-5" src="{{ asset('blog') }}/imgs/news/thumb-19.jpg"
                                        alt="">
                                </div>
                                <div class="post-content media-body text-white">
                                    <h5 class="post-title mb-15 text-limit-2-row">Staying at the Hilton Seychelles
                                        Northolme Resort & Spa</h5>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on text-white">22 Sep</span>
                                        <span class="post-by has-dot text-white">16k views</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
        {{-- <!-- End feature -->
        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Featured posts</h5>
                        </div> --}}
        {{-- <div class="col-md-8 text-md-end font-small align-self-center">
                            <p class="d-inline-block mr-5 mb-0"><i
                                    class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Hot tags:</p>
                            <ul class="list-inline d-inline-block tags">
                                <li class="list-inline-item"><a href="#"># Covid-19</a></li>
                                <li class="list-inline-item"><a href="#"># Inspiration</a></li>
                                <li class="list-inline-item"><a href="#"># Work online</a></li>
                                <li class="list-inline-item"><a href="#"># Stay home</a></li>
                            </ul>
                        </div> --}}
        {{-- </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div
                            class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative"
                                        style="background-image: url({{ asset('blog') }}/imgs/news/news-4.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <span class="top-left-icon bg-warning"><i
                                                class="elegant-icon icon_star_alt"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                                <a href="category.html"><span
                                                        class="post-cat text-info text-uppercase">Travel</span></a>
                                                <a href="category.html"><span
                                                        class="post-cat text-success text-uppercase">Animal</span></a>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="single.html">Beachmaster Elephant Seal
                                                    Fights off Rival Male, The match is uncompromising</a>
                                            </h3>
                                            <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                                <span class="post-on">20 minutes ago</span>
                                                <span class="hit-count has-dot">23k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative"
                                        style="background-image: url({{ asset('blog') }}/imgs/news/news-6.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <span class="top-left-icon bg-danger"><i class="elegant-icon icon_image"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                                <a href="category.html"><span
                                                        class="post-cat text-info text-uppercase">Lifestyle</span></a>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="single.html">This genius photo experiment
                                                    shows we are all just sheeple in the consumer matrix</a>
                                            </h3>
                                            <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                                <span class="post-on">26 August 2023</span>
                                                <span class="hit-count has-dot">18k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url({{ asset('blog') }}/imgs/news/news-1.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <span class="top-right-icon bg-success"><i
                                        class="elegant-icon icon_camera_alt"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-info">Travel</span></a>
                                    <a href="category.html"><span class="post-cat text-success">Food</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Want fluffy Japanese pancakes but can’t fly to Tokyo?</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="time-reading has-dot">12 mins read</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url({{ asset('blog') }}/imgs/news/news-7.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-warning">Fashion</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Put Yourself in Your Customers Shoes</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on">17 July</span>
                                        <span class="time-reading has-dot">8 mins read</span>
                                        <span class="post-by has-dot">12k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url({{ asset('blog') }}/imgs/news/news-9.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Life and Death in the Empire of the Tiger</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on">7 August</span>
                                        <span class="time-reading has-dot">15 mins read</span>
                                        <span class="post-by has-dot">500 views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url({{ asset('blog') }}/imgs/news/news-11.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <span class="top-right-icon bg-info"><i class="elegant-icon icon_headphones"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-success">Lifestyle</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">When Two Wheels Are Better Than Four</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                        <span class="post-on">15 Jun</span>
                                        <span class="time-reading has-dot">9 mins read</span>
                                        <span class="post-by has-dot">1.2k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div> --}}


        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        {{-- <div class="post-module-2">
                            <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                                <h5 class="mt-5 mb-30">Business</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <div class="row">
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="background-image: url({{ asset('blog') }}/imgs/news/news-6.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span
                                                            class="post-cat text-info">Artists</span></a>
                                                    <a href="category.html"><span
                                                            class="post-cat text-success">Film</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Easy Ways to Use Alternatives to
                                                            Plastic</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Graduating from a top accelerator or incubator can be as
                                                            career-defining for a&nbsp;startup founder&nbsp;as an elite
                                                            university diploma. The intensive programmes, which…</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">27 August</span>
                                                        <span class="time-reading has-dot">12 mins read</span>
                                                        <span class="post-by has-dot">23k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="background-image: url({{ asset('blog') }}/imgs/news/news-8.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span class="post-cat">Fashion</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Tips for Growing Healthy, Longer Hair</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Proin vitae placerat quam. Ut sodales eleifend urna, in
                                                            condimentum tortor ultricies eu. Nunc auctor iaculis
                                                            dolorProin vitae placerat quam. Proin vitae placerat quam.
                                                        </p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">12 August</span>
                                                        <span class="time-reading has-dot">6 mins read</span>
                                                        <span class="post-by has-dot">3k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="background-image: url({{ asset('blog') }}/imgs/news/news-10.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <span class="top-right-icon bg-secondary"><i
                                                        class="elegant-icon icon_heart_alt"></i></span>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span
                                                            class="post-cat text-success">Lifestyle</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Project Ideas Around the House</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                                            tempor condimentum metus non tempor. Maecenas non augue
                                                            aliquam, facilisis lectus quis, lacinia risus.</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">27 August</span>
                                                        <span class="time-reading has-dot">12 mins read</span>
                                                        <span class="post-by has-dot">23k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="background-image: url({{ asset('blog') }}/imgs/news/news-12.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span
                                                            class="post-cat text-danger">Hotels</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">How to Give Yourself a Spa Day from
                                                            Home</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Graduating from a top accelerator or incubator can be as
                                                            career-defining for a&nbsp;startup founder&nbsp;as an elite
                                                            university diploma. The intensive programmes, which…</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">18 August</span>
                                                        <span class="time-reading has-dot">14 mins read</span>
                                                        <span class="post-by has-dot">25k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div> --}}
                        <div class="post-module-3">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Latest posts</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                @foreach ($latestPosts as $latest)
                                    <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                        <div class="row mb-40 list-style-2">
                                            <div class="col-md-4">
                                                <div class="post-thumb position-relative border-radius-5">
                                                    <div class="img-hover-slide border-radius-5 position-relative"
                                                        style="background-image: url({{ asset('uploads/post/coverImage/' . $latest->coverImage) }})">
                                                        <a class="img-link"
                                                            href="{{ route('postDetails', $latest->slug) }}"></a>
                                                    </div>
                                                    <ul class="social-share">
                                                        <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                        </li>
                                                        <li><a class="fb" href="#" title="Share on Facebook"
                                                                target="_blank"><i
                                                                    class="elegant-icon social_facebook"></i></a></li>
                                                        <li><a class="tw" href="#" target="_blank"
                                                                title="Tweet now"><i
                                                                    class="elegant-icon social_twitter"></i></a></li>
                                                        <li><a class="pt" href="#" target="_blank"
                                                                title="Pin it"><i
                                                                    class="elegant-icon social_pinterest"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8 align-self-center">
                                                <div class="post-content">
                                                    <div class="entry-meta meta-0 font-small mb-10">
                                                        <a href="{{ route('categoryPosts', $latest->categoryId) }}"><span
                                                                class="text-primary">{{ $latest->relToCategory()->first()->categoryName }}</span></a>
                                                    </div>
                                                    <h5 class="post-title font-weight-900 mb-20">
                                                        <a
                                                            href="{{ route('postDetails', $latest->slug) }}">{{ $latest->title }}</a>
                                                        <span class="post-format-icon"><i
                                                                class="elegant-icon icon_star_alt"></i></span>
                                                    </h5>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span
                                                            class="post-on">{{ $latest->created_at->diffForHumans() }}</span>
                                                        <span class="post-by has-dot">
                                                            @if (App\Models\popularPost::where('postId', $latest->id)->exists())
                                                                {{ App\Models\popularPost::where('postId', $latest->id)->first()->totalRead }}
                                                            @else
                                                                0
                                                            @endif
                                                            views
                                                        </span>
                                                        {{-- <span class="time-reading has-dot">11 mins read</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                                {{-- <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative"
                                                    style="background-image: url({{ asset('blog') }}/imgs/news/news-4.jpg)">
                                                    <a class="img-link" href="single.html"></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
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
                                                    <a href="single.html">10 Easy Ways to Be Environmentally Conscious
                                                        At Home</a>
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
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative"
                                                    style="background-image: url({{ asset('blog') }}/imgs/news/news-2.jpg)">
                                                    <a class="img-link" href="single.html"></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span
                                                            class="post-cat text-warning">Cooking</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="single.html">My Favorite Comfies to Lounge in At Home</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                    <span class="post-on">7 August</span>
                                                    <span class="time-reading has-dot">9 mins read</span>
                                                    <span class="post-by has-dot">12k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative"
                                                    style="background-image: url({{ asset('blog') }}/imgs/news/news-3.jpg)">
                                                    <a class="img-link" href="single.html"></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span
                                                            class="post-cat text-danger">Travel</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="single.html">How to Give Your Space a Parisian-Inspired
                                                        Makeover</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                    <span class="post-on">27 August</span>
                                                    <span class="time-reading has-dot">12 mins read</span>
                                                    <span class="post-by has-dot">23k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article> --}}
                            </div>
                        </div>

                        <div class="pagination-area mb-30 wow fadeInUp animated">
                            {{-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">

                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="elegant-icon arrow_left"></i>
                                        </a>
                                    </li>

                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#">04</a></li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="elegant-icon arrow_right"></i>
                                        </a>
                                    </li>

                                </ul>
                            </nav> --}}
                            {!! $latestPosts->links() !!}
                        </div>


                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            {{-- <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                                <img class="about-author-img mb-25" src="{{ asset('blog') }}/imgs/authors/author.jpg"
                                    alt="">
                                <h5 class="mb-20">Hello, I'm Steven</h5>
                                <p class="font-medium text-muted">Hi, I’m Stenven, a Florida native, who left my
                                    career in corporate wealth management six years ago to embark on a summer of soul
                                    searching that would change the course of my life forever.</p>
                                <strong>Follow me: </strong>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="#" target="_blank"
                                            title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#" target="_blank"
                                            title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="pt" href="#" target="_blank"
                                            title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div> --}}
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Most popular</h5>
                                </div>
                                <div class="post-block-list post-module-1">
                                    <ul class="list-post">
                                        @foreach ($popularPost as $popular)
                                            <li class="mb-30 wow fadeInUp animated">
                                                <div
                                                    class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                            @php
                                                                $post = App\Models\Post::where('id', $popular->postId)->first();
                                                            @endphp
                                                            <a
                                                                href="{{ route('postDetails', $post->slug) }}">{{ $post->title }}</a>
                                                        </h6>
                                                        <div
                                                            class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                            <span
                                                                class="post-on">{{ $post->created_at->diffForHumans() }}</span>
                                                            <span class="post-by has-dot">{{ $popular->totalRead }}
                                                                views</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                        <a class="color-white"
                                                            href="{{ route('postDetails', $post->slug) }}">
                                                            <img src="{{ asset('uploads/post/thumbnail/' . $post->thumbnail) }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                        {{-- <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                            href="single.html">Relationship Podcasts are Having “That”
                                                            Talk</a></h6>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">12 August</span>
                                                        <span class="post-by has-dot">6k views</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset('blog') }}/imgs/news/thumb-7.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                            href="single.html">Here’s How to Get the Best Sleep at
                                                            Night</a></h6>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">15 August</span>
                                                        <span class="post-by has-dot">16k views</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset('blog') }}/imgs/news/thumb-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                            href="single.html">America’s Governors Get Tested for a
                                                            Virus That Is Testing Them</a></h6>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">12 August</span>
                                                        <span class="post-by has-dot">3k views</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset('blog') }}/imgs/news/thumb-3.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Last comments</h5>
                                </div>
                                <div class="post-block-list post-module-2">
                                    <ul class="list-post">
                                        @foreach ($comments as $comment)
                                            <li class="mb-30 wow fadeInUp animated">
                                                <div
                                                    class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                    <div
                                                        class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">

                                                        @php
                                                            $User = App\Models\blog_user::where('id', $comment->userId)->first();
                                                        @endphp
                                                        <a class="color-white" href="{{ route("author", $User->id) }}">
                                                            @if ($User->image == null)
                                                                <img src="{{ Avatar::create($User->name)->toBase64() }}"
                                                                    alt="User" />
                                                            @else
                                                                <img src="{{ asset('uploads/user/profile/' . $User->image) }}"
                                                                    alt="User">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <p class="mb-10"><a href="{{ route("author", $User->id) }}"><strong>{{ $User->name }}</strong></a>
                                                            <span
                                                                class="ml-15 font-small text-muted has-dot">{{ $comment->created_at->diffForHumans() }}</span>
                                                        </p>
                                                        @php
                                                            $postDetails = App\Models\Post::where('id', $comment->postId)->first();
                                                        @endphp
                                                        <a href="{{ route("postDetails", $postDetails->slug ) }}"><p class="text-muted font-small">
                                                            {{ Str::substr($comment->comment, 0, 60) }} <b>...</b></p></a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                        {{-- <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div
                                                    class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset('blog') }}/imgs/authors/author-3.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <p class="mb-10"><a href="author.html"><strong>Kokawa</strong></a>
                                                        <span class="ml-15 font-small text-muted has-dot">12 Feb
                                                            2023</span>
                                                    </p>
                                                    <p class="text-muted font-small">Striking pewter studded
                                                        epaulettes silver zips</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div
                                                    class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset('blog') }}/imgs/news/thumb-1.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <p class="mb-10"><a href="author.html"><strong>Tsukasi</strong></a>
                                                        <span class="ml-15 font-small text-muted has-dot">18 May
                                                            2023</span>
                                                    </p>
                                                    <p class="text-muted font-small">Workwear bow detailing a
                                                        slingback buckle strap</p>
                                                </div>
                                            </div>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Instagram</h5>
                                </div>
                                <div class="instagram-gellay">
                                    <ul class="insta-feed">
                                        <li>
                                            <a href="{{ asset('blog') }}/imgs/thumbnail-3.html" class="play-video"
                                                data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                    class="border-radius-5"
                                                    src="{{ asset('blog') }}/imgs/news/thumb-1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('blog') }}/imgs/thumbnail-4.html" class="play-video"
                                                data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                    class="border-radius-5"
                                                    src="{{ asset('blog') }}/imgs/news/thumb-2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('blog') }}/imgs/thumbnail-5.html" class="play-video"
                                                data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                    class="border-radius-5"
                                                    src="{{ asset('blog') }}/imgs/news/thumb-3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('blog') }}/imgs/thumbnail-3.html" class="play-video"
                                                data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                    class="border-radius-5"
                                                    src="{{ asset('blog') }}/imgs/news/thumb-4.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('blog') }}/imgs/thumbnail-4.html" class="play-video"
                                                data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                    class="border-radius-5"
                                                    src="{{ asset('blog') }}/imgs/news/thumb-5.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('blog') }}/imgs/thumbnail-5.html" class="play-video"
                                                data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                    class="border-radius-5"
                                                    src="{{ asset('blog') }}/imgs/news/thumb-6.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
