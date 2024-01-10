@extends('dashboard.blog.blank')
@section('postList')
    active open
@endsection


@section('mainContent')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Post List</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('blogHome') }}"><i class="zmdi zmdi-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('profile') }}">Blog</a></li>
                            <li class="breadcrumb-item active">Post List</li>
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

                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Posts ({{ App\Models\Post::count() }})</strong></h2>

                        </div>
                        <div class="body">

                            @if (session("Approved"))
                            <div class="alert alert-success" role="alert">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="zmdi zmdi-thumb-up"></i>
                                    </div>
                                    <strong>Well Done! </strong>{{ session('Approved') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="zmdi zmdi-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            @endif
                            @if (session("Archived"))
                            <div class="alert alert-success" role="alert">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="zmdi zmdi-thumb-up"></i>
                                    </div>
                                    <strong>Well Done! </strong>{{ session('Archived') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="zmdi zmdi-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            @endif

                            @if (session('Delete'))
                                <div class="alert alert-success" role="alert">
                                    <div class="container">
                                        <div class="alert-icon">
                                            <i class="zmdi zmdi-thumb-up"></i>
                                        </div>
                                        <strong>Well Done! </strong>{{ session('Delete') }}
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
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Thumbnail</th>
                                    {{-- <th>Tags</th> --}}
                                    <th>Status</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($posts as $sl => $post)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td>
                                            @if ($post->relToAuth()->first()->image == null)
                                                <img title="{{ $post->relToAuth()->first()->name }}" width="30"
                                                    src="{{ Avatar::create($post->relToAuth()->first()->name)->toBase64() }}" />
                                            @else
                                                <img title="{{ $post->relToAuth()->first()->name }}" width="30"
                                                    style="border-radius: 100%"
                                                    src="{{ asset('uploads/user/profile/' . $post->relToAuth()->first()->image) }}"
                                                    alt="User">
                                            @endif
                                        </td>
                                        <td>{{ $post->relToCategory()->first()->categoryName }}</td>
                                        <td>{{ Str::substr($post->title, 0, 10) }}...</td>
                                        <td><img style="height: 30px" class="border border-primary"
                                                src="{{ asset('uploads/post/thumbnail/' . $post->thumbnail) }}"
                                                alt="Thumbnail"></td>
                                        {{-- <td>{{ $post->tags }}</td> --}}

                                        <td>
                                            @if ($post->status == 1)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-info">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        <td>
                                            @if ($post->status == 1)
                                                <a title="Archive" href="{{ route("postArchive", $post->id) }}">
                                                    <button type="submit"
                                                        class="btn btn-info btn-icon btn-icon-mini btn-round "><i
                                                            class="material-icons">archive</i></button>
                                                </a>

                                                <a title="Delete" href="">
                                                    <button type="submit"
                                                        class="btn btn-danger btn-icon btn-icon-mini btn-round "><i
                                                            class="zmdi zmdi-delete"></i></button>
                                                </a>
                                            @else
                                                <a title="Approve" href="{{ route("postApprove", $post->id) }}">
                                                    <button type="submit"
                                                        class="btn btn-info btn-icon btn-icon-mini btn-round "><i
                                                            class="material-icons">done</i></button>
                                                </a>

                                                <a title="Delete" href="">
                                                    <button type="submit"
                                                        class="btn btn-danger btn-icon btn-icon-mini btn-round "><i
                                                            class="zmdi zmdi-delete"></i></button>
                                                </a>
                                            @endif



                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-danger text-center">
                                            <h2><b>Empty!</b></h2>
                                        </td>
                                    </tr>
                                @endforelse

                            </table>

                            {{-- Pagination --}}
                            <div class="d-flex justify-content-center pagination pagination-success">
                                {!! $posts->links() !!}
                                {{-- {{ $categories->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
@endsection
