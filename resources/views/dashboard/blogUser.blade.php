@extends('dashboard.readyPage')
@section("Users")
active open
@endsection
@section('title')
    Stories -Blog User List
@endsection
@section('pageName')
    Blog User List
@endsection
@section('1stPath')
    Users
@endsection
@section('2ndPath')
    Blog User List
@endsection
@section('colLgStart')
    <div class="col-lg-12 m-auto">
        <div class="card">
            <div class="header">
                <h2><strong>User List ({{ App\Models\blog_user::all()->count() }})</strong></h2>
            </div>
            <div class="body">
                @if (session('Deleted'))
                    <div class="alert alert-success" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="zmdi zmdi-thumb-up"></i>
                            </div>
                            <strong>Well Done! </strong>{{ session('Deleted') }}
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
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    @forelse ($users as $sl => $user)
                        <tr>
                            <td>{{ $sl + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->image == null)
                                    <img width="50" src="{{ Avatar::create($user->name)->toBase64() }}" />
                                @else
                                    <img width="50" style="border-radius: 100%" src="{{ asset('uploads/user/profile/'.$user->image) }}" alt="User">
                                @endif
                            </td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>
                                @if ($user->authorStatus == 1)
                                    <span class="badge badge-success">Author</span>
                                @else
                                    <span class="badge badge-info">User</span>
                                @endif
                            </td>
                            <td>
                                <a title="Delete" href="{{ route('blogUserDelete', $user->id) }}">
                                    <button type="submit" class="btn btn-danger btn-icon btn-icon-mini btn-round "><i
                                            class="zmdi zmdi-delete"></i></button>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-danger text-center">
                                <h2><b>Empty!</b></h2>
                            </td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
