@extends("layout.app")

@section("content")
    <h2>Book Details</h2>

    <div>
        <h3>Title</h3>:
        <p>{{$book->title}}</p>
    </div>
@endsection