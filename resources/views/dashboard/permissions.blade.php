
@extends('dashboard.readyPage')
@section("permissions")
active open
@endsection
@section('1stPath')
    Role Management
@endsection
@section('2ndPath')
    Permissions
@endsection
@section('colLgStart')
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="header">
                <h2><strong>Permissions</strong></h2>
            </div>
            <div class="body">
                @if (session('permissionDeleted'))
                    <div class="alert alert-success" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="zmdi zmdi-thumb-up"></i>
                            </div>
                            <strong>Well Done! </strong>{{ session('permissionDeleted') }}
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
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($permissions as $sl => $permission)
                        <tr>
                            <td>{{ $sl + 1 }}</td>
                            <td>{{ $permission->name }}</td>
                            <td><a href="{{ route("permissionDelete", $permission->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="header">
                <h2><strong>Add New Permission</strong></h2>
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
                @if (session('permissionAdd'))
                    <div class="alert alert-success" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="zmdi zmdi-thumb-up"></i>
                            </div>
                            <strong>Well Done! </strong>{{ session('permissionAdd') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif
                <form action="{{ route('permissionData') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Permission Name*</label>
                        <input type="text" name="permissionName" value="" placeholder="Enter Permission Name"
                            class="form-control" autofocus required>
                        @error('permissionName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-round"><b>Add</b></button>
                </form>
            </div>
        </div>
    </div>

@endsection

