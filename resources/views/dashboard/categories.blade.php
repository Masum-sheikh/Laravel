@extends('dashboard.readyPage')

@can("addItem")
@section("addItem")
active open
@endsection
@section('title')
    Stories -Categories
@endsection
@section('pageName')
    Categories
@endsection
@section('1stPath')
    For Blog
@endsection
@section('2ndPath')
    Categories
@endsection
@section('colLgStart')
    <div class="col-lg-8">
        <div class="card">
            <div class="header">
                <h2><strong>All Category ({{ App\Models\Category::count() }})</strong></h2>

            </div>
            <div class="body">
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
                        <th>Category Name</th>
                        <th>Details</th>
                        <th>Category Image</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($categories as $sl => $category)
                        <tr>
                            <td>{{ $sl + 1 }}</td>
                            <td>{{ $category->categoryName }}</td>
                            <td>{{ Str::substr($category->details, 0, 20) }}...</td>
                            <td><img class="rounded-circle border border-primary"
                                    src="{{ asset('uploads/categories/' . $category->categoryImage) }}"
                                    alt="{{ $category->categoryName }}"></td>
                            <td><a href="{{ route('categoryDelete', $category->id) }}"
                                    class="btn btn-danger"><b>Delete</b></a>
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
                <div class="d-flex justify-content-center pagination pagination-success" >
                  {!! $categories->links() !!}
                  {{-- {{ $categories->links() }} --}}
              </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h2><strong>Add Category</strong></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
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
                <form action="{{ route('categoryData') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Category Name*</label>
                        <input type="text" name="categoryName" value="" placeholder="Enter Category Name"
                            class="form-control" autofocus required>
                        @error('categoryName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="">Details</label>
                        <input type="text" name="details" value="" placeholder="Details" class="form-control">
                    </div> --}}
                    <div class="form-group">
                        <label for="">Details (Optional)</label>
                        <textarea rows="2" class="form-control no-resize" name="details" placeholder="Details here..." required></textarea>
                        @error('details')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Category Image*</label>
                        <input type="file" value="" name="categoryImage" placeholder="Enter Email"
                            class="form-control" required
                            onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        @error('categoryImage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img class="rounded-top border border-primary" width="100px" id="blah" src=""
                            alt="">
                    </div>
                    <button type="submit" class="btn btn-success btn-round"><b>Add</b></button>
                </form>
            </div>
        </div>
    </div>
@endsection
@endcan
