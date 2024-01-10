@extends('dashboard.readyPage')
@section("Users")
active open
@endsection
@section('title')
    Stories -Author List
@endsection
@section('pageName')
    Author List
@endsection
@section('1stPath')
    Users
@endsection
@section('2ndPath')
    Author List
@endsection
@section('colLgStart')
    <div class="col-lg-12 m-auto">
        <div class="card">
            <div class="header">
                <h2><strong>Author List ({{ App\Models\blog_user::where('authorStatus', 1)->count() }})</strong></h2>
            </div>
            <div class="body">
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
                    @forelse ($authors as $sl => $author)
                        <tr>
                            <td>{{ $sl + 1 }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->username }}</td>
                            <td>{{ $author->email }}</td>
                            <td>
                                @if ($author->image == null)
                                    <img width="50" src="{{ Avatar::create($author->name)->toBase64() }}" />
                                @else
                                    {{-- <img src="{{ asset('dashboard') }}/images/profile_av.jpg" alt="User"> --}}
                                @endif
                            </td>
                            <td>{{ $author->updated_at->diffForHumans() }}</td>
                            <td><span class="badge badge-success">Approved</span></td>
                            <td>
                                <a title="Deactive" href="{{ route('authorDeactive', $author->id) }}">
                                    <button type="submit" class="btn btn-warning btn-icon btn-icon-mini btn-round "><i
                                            class="material-icons">archive</i></button>
                                </a>
                                {{-- <a title="Delete" href="">
                                    <button type="submit" class="btn btn-danger btn-icon btn-icon-mini btn-round "><i class="zmdi zmdi-delete"></i></button>
                                </a> --}}
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
