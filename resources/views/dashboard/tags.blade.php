@extends('dashboard.readyPage')
@can("addItem")
@section("addItem")
active open
@endsection
@section('title')
    Stories -Tags
@endsection
@section('pageName')
    Tags
@endsection
@section('1stPath')
    For Blog
@endsection
@section('2ndPath')
    Tags
@endsection
@section('colLgStart')
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="header">
                <h2><strong>All Tags ({{ App\Models\Tag::count() }})</strong></h2>
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
                        <th>Tag Name</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($tags as $sl => $tag)
                        <tr>
                            <td>{{ $sl + 1 }}</td>
                            <td>{{ $tag->tagName }}</td>
                             <td><a href="{{ route('tagDelete', $tag->id) }}"
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
                  {!! $tags->links() !!}
                  {{-- {{ $categories->links() }} --}}
              </div>
            </div>
        </div>
    </div>

    <div class="col-lg-5 ">
        <div class="card">
            <div class="header">
                <h2><strong>Add Tag</strong></h2>
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
                <form action="{{ route('tagsData') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Tag Name*</label>
                        <input type="text" name="tagName" value="" placeholder="Enter Tag Name"
                            class="form-control" autofocus required>
                        @error('tagName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-round"><b>Add</b></button>
                </form>
            </div>
        </div>
    </div>
@endsection
@endcan
