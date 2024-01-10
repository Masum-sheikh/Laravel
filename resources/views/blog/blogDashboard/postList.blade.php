@extends('blog.blogDashboard.blank')
@section('postListActive')
    active open
@endsection
@section('mainContent')
    <section class="content blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Post List</h2>
                        <ul class="breadcrumb p-l-0 p-b-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                            <li class="breadcrumb-item active">Post List</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Post List ({{ App\Models\Post::where("authorId", Auth::guard('author')->id())->count() }})</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                            class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp" x-placement="bottom-start"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            @if (session('Done'))
                                <div class="alert alert-success" role="alert">
                                    <div class="container">
                                        <div class="alert-icon">
                                            <i class="zmdi zmdi-thumb-up"></i>
                                        </div>
                                        <strong>Well Done! </strong>{{ session('Done') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">
                                                <i class="zmdi zmdi-close"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            <table class="table table-hover">
                                <tr>
                                    <th>Sl</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    {{-- <th>Cover Image</th> --}}
                                    <th>Thumbnail</th>
                                    {{-- <th>Tags</th> --}}
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @forelse ($posts as $sl => $post)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td>{{ $post->relToCategory()->first()->categoryName }}</td>
                                        <td>{{ Str::substr($post->title, 0, 10)}}...</td>
                                        {{-- <td>{{ $post->coverImage }}</td> --}}
                                        <td><img style="height: 30px" class="border border-primary"
                                            src="{{ asset('uploads/post/thumbnail/' . $post->thumbnail) }}"
                                            alt="Thumbnail"></td>
                                        {{-- <td>{{ $post->tags }}</td> --}}
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        <td>@if ($post->status == 1)
                                            <span class="badge badge-success">Approved</span>
                                        @else
                                            <span class="badge badge-info">Pending</span>
                                        @endif</td>
                                        <td>
                                            {{-- <a title="Archive" href="{{ route("postArchive", $post->id) }}">
                                                <button type="submit"
                                                    class="btn btn-info btn-icon btn-icon-mini btn-round "><i
                                                        class="material-icons">archive</i></button>
                                            </a> --}}

                                            <a title="Delete" href="">
                                                <button type="submit"
                                                    class="btn btn-danger btn-icon btn-icon-mini btn-round "><i
                                                        class="zmdi zmdi-delete"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="10" class="text-danger text-center">
                                            <h2><b>Empty!</b></h2>
                                        </td>
                                    </tr>
                                    @endforelse
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </section>
@endsection
