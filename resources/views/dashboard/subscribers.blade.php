@extends("dashboard.readyPage")
@section("subscribers")
active open
@endsection
@section("title")
    Subscribers
@endsection
@section("pageName")
Subscribers
@endsection
@section("1stPath")
Blog
@endsection
@section("2ndPath")
Subscribers
@endsection
@section("colLgStart")
<div class="col-lg-10 m-auto">
    <div class="card">
        <div class="header">
            <h2><strong>Subscribers</strong></h2>
        </div>
        <div class="body">
            @if (session("sent"))
            <div class="alert alert-success">{{ session("sent") }}</div>
            @endif
            <table class="table table-hover">
                <tr>
                    <th>Sl</th>
                    <th>Email</th>
                    <th>Subscibe</th>
                    <th>Send Mail</th>
                    <th>Action</th>
                </tr>
                @foreach ($subscribers as $sl => $subscriber)
                    <tr>
                        <td>{{ $sl + 1 }}</td>
                        <td>{{ $subscriber->email }}</td>
                        <td>{{ $subscriber->totalSubscribe }} time</td>
                        <td><a href="{{ route("sendNewsLetter", $subscriber->id) }}" class="btn btn-info">Send</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
