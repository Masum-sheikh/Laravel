@extends('dashboard.readyPage')
@section("permissions")
active open
@endsection
@section('title')
    Stories -Users
@endsection
@section('pageName')
    Users
@endsection
@section('1stPath')
   Role Management
@endsection
@section('2ndPath')
    Users
@endsection
@section('colLgStart')
    <div class="col-lg-8">
        <div class="card">
            <div class="header">
                <h2><strong>User List</strong></h2>
            </div>
            <div class="body">
                @if (session('removed'))
                    <div class="alert alert-success" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="zmdi zmdi-thumb-up"></i>
                            </div>
                            <strong>Well Done! </strong>{{ session('removed') }}
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
                        {{-- <th>Photo</th> --}}
                        {{-- <th>Username</th> --}}
                        <th>Name</th>
                        {{-- <th>Email</th> --}}
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $sl => $user)
                        <tr>
                            <td>{{ $sl + 1 }}</td>
                            {{-- <td>
                                @if ($user->image == null)
                                    <img width="50" src="{{ Avatar::create($user->name)->toBase64() }}" />
                                @else
                                    <img src="{{ asset('dashboard') }}/images/profile_av.jpg" alt="User">
                                @endif
                            </td> --}}
                            {{-- <td>{{ $user->username }}</td> --}}
                            <td>{{ $user->name }}</td>
                            {{-- <td>{{ $user->email }}</td> --}}
                            <td class="text-wrap">@forelse ($user->getRoleNames() as $role)
                                <span class="badge badge-info">{{ $role }}</span>
                                @empty
                                <span class="badge badge-primary">Not Assign</span>
                            @endforelse</td>

                            <td><a href="{{ route("removeRole", $user->id) }}" class="btn btn-danger">Remove Role</a><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h2><strong>Assign Role</strong></h2>
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
                @if (session('assigned'))
                    <div class="alert alert-success" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="zmdi zmdi-thumb-up"></i>
                            </div>
                            <strong>Well Done! </strong>{{ session('assigned') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif
                <form action="{{ route("userData") }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">User Name</label>
                        <select class="form-control show-tick" name="user" id="">
                            <option value="">Select User</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>


                        @error('user')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Role Name</label>
                        <select class="form-control show-tick" name="role" id="">
                            <option value="">Select Role</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>


                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success btn-round"><b>Assign</b></button>
                </form>
            </div>
        </div>
    </div>
@endsection
