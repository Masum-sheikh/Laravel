@extends('blog.blogDashboard.blank')
@section('blogDashboardHeaderLink')
    <link href="{{ asset('dashboard') }}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('newPostActive')
    active open
@endsection
@section('mainContent')
    <section class="content blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>New Post</h2>
                        <ul class="breadcrumb p-l-0 p-b-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                            <li class="breadcrumb-item active">New Post</li>
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
            {{-- <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="body">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Blog title" />
                            </div>
                            <select class="form-control show-tick">
                                <option>Select Category --</option>
                                <option>Web Design</option>
                                <option>Photography</option>
                                <option>Technology</option>
                                <option>Lifestyle</option>
                                <option>Sports</option>
                            </select>
                            <form action="/" id="frmFileUpload" class="dropzone m-b-20 m-t-20" method="post"
                                enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually
                                        uploaded.)</em>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <textarea id="editor">

                        </textarea>
                            <button type="button" class="btn btn-primary btn-round waves-effect m-t-20">Post</button>
                        </div>
                    </div>


                </div>
            </div> --}}

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>New Post</strong></h2>
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

                            <form action="{{ route('userPostData') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="col-sm-6">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="col-sm-6">
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Category*</label>
                                            <select class="form-control show-tick" name="categoryName" id="">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->categoryName }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('categoryName')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="">Title*</label>
                                            <input type="text" name="title" value=""
                                                placeholder="Enter Title Here" class="form-control">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Details*</label>
                                    <textarea id="editor" class="" name="details" placeholder="Details here..."></textarea>
                                    @error('details')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Cover Image*</label>
                                            <input type="file" name="coverImage" id="" class="form-control">
                                            @error('coverImage')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Thumbnail*</label>
                                            <input type="file" name="thumbnail" value="" class="form-control">
                                            @error('thumbnail')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Select Tags*</label>
                                    <select class="form-control show-tick" multiple="multiple" name="tags[]"
                                        id="ss">

                                        {{-- <option value="">Select Tags</option> --}}
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->tagName }}</option>
                                        @endforeach
                                    </select>
                                    @error('tags')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-success btn-round"><b>Add</b></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </section>
@endsection
@section('blogDashboradFooterScript')
    {{-- For Ck Editor --}}

    {{-- Online CDN --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script> --}}

    {{-- Internal CDN --}}
    <script src="{{ asset('dashboard') }}/ckeditor5/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckEditorUploads') . '?_token=' . csrf_token() }}',
                }
            }).then(editor => {
                editor.ui.view.editable.element.style.height = '200px';
            }).catch(error => {});
    </script>

    // Multi Select
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $("#ss").select2({
            placeholder: "Select Tags"
        });
    </script>
@endsection
