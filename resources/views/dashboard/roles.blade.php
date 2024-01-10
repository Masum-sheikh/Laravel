@extends('dashboard.readyPage')
@section("permissions")
active open
@endsection
@section('1stPath')
    Role Management
@endsection
@section('2ndPath')
    Role
@endsection
@section('colLgStart')
<div class="col-lg-7">
    <div class="card">
        <div class="header">
            <h2><strong>Roles</strong></h2>
        </div>
        <div class="body">
            @if (session('roleDeleted'))
                <div class="alert alert-success" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="zmdi zmdi-thumb-up"></i>
                        </div>
                        <strong>Well Done! </strong>{{ session('roleDeleted') }}
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
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
                @foreach ($roles as $sl => $role)
                    <tr>
                        <td>{{ $sl + 1 }}</td>
                        <td>{{ $role->name }}</td>
                        <td class="text-wrap">@foreach ($role->getPermissionNames() as $permission)
                            <span class="badge badge-info">{{ $permission }}</span>
                        @endforeach</td>
                        <td><a href="{{ route("roleDelete", $role->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>
<div class="col-lg-5">
    <div class="card">
        <div class="header">
            <h2><strong>Create New Role</strong></h2>
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
            @if (session('roleAdd'))
                <div class="alert alert-success" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="zmdi zmdi-thumb-up"></i>
                        </div>
                        <strong>Well Done! </strong>{{ session('roleAdd') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close"></i>
                            </span>
                        </button>
                    </div>
                </div>
            @endif
            <form action="{{ route('roleData') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Roll Name*</label>
                    <input type="text" name="roleName" value="" placeholder="Enter Role Name"
                        class="form-control" autofocus>
                    @error('roleName')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Permissions*</label>
                    @foreach ($permissions as $permission)
                        <div class="checkbox">
                            <input id="{{ $permission->name }}" type="checkbox" name="permissions[]"
                                value="{{ $permission->name }}">
                            <label for="{{ $permission->name }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                        {{-- <input id="{{ $permission->name }}" type="checkbox" value="{{ $permission->name }}" name="permissions">
                        <label for="{{ $permission->name }}">{{ $permission->name }}</label>
                        <br> --}}
                    @endforeach
                    @error('permissions')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-round"><b>Create</b></button>
            </form>
        </div>
    </div>
</div>
@endsection




