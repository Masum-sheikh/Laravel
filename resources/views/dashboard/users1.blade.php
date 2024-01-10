@extends('dashboard.readyPage')
@section('title')
    Stories -Users
@endsection
@section('pageName')
    Users
@endsection
@section('1stPath')
    For Dashboard
@endsection
@section('2ndPath')
    Users
@endsection
@section('colLgStart')
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="header">
                <h2><strong>User List</strong></h2>
            </div>
            <div class="body">
                <table class="table table-hover">
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $sl => $user)
                        <tr>
                            <td>{{ $sl + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->image == null)
                                    <img width="50" src="{{ Avatar::create($user->name)->toBase64() }}" />
                                @else
                                    {{-- <img src="{{ asset('dashboard') }}/images/profile_av.jpg" alt="User"> --}}
                                @endif
                            </td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
