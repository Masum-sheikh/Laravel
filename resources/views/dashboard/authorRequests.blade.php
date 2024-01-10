@extends('dashboard.readyPage')
@section("Users")
active open
@endsection
@section('title')
    Stories -Author Requests
@endsection
@section('pageName')
    Author Requests
@endsection
@section('1stPath')
    Users
@endsection
@section('2ndPath')
    Author Requests
@endsection
@section('colLgStart')
    <div class="col-lg-12 m-auto">
        <div class="card">
            <div class="header">
                <h2><strong>Author Requests ({{ App\Models\author_request::count() }})</strong></h2>
            </div>
            <div class="body">
                @if (session('Updated'))
                    <div class="alert alert-success" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="zmdi zmdi-thumb-up"></i>
                            </div>
                            <strong>Well Done! </strong>{{ session('Updated') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif
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
                    @forelse ($requests as $sl => $request)
                        <tr>
                            <td>{{ $sl + 1 }}</td>
                            <td>{{ $request->relToBlogUser()->first()->name }}</td>
                            <td>{{ $request->relToBlogUser()->first()->username }}</td>
                            <td>{{ $request->email }}</td>
                            <td>
                                @if ($request->relToBlogUser()->first()->image == null)
                                    <img width="50" src="{{ Avatar::create($request->relToBlogUser()->first()->name)->toBase64() }}" />
                                @else
                                    {{-- <img src="{{ asset('dashboard') }}/images/profile_av.jpg" alt="User"> --}}
                                @endif
                            <td>{{ $request->created_at->diffForHumans() }}</td>
                            <td><span class="badge badge-info">Pending</span></td>
                            <td>
                                <a title="Approve" href="{{ route('authorRequestApproved', $request->id) }}">
                                    <button type="submit" class="btn btn-info btn-icon btn-icon-mini btn-round "><i
                                            class="material-icons">done</i></button>
                                </a>

                                <a title="Delete" href="{{ route('authorRequestDelete', $request->id) }}">
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
