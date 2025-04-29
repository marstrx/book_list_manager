@extends("layout.app")

@section("content")
    <h2>Book Details</h2>

    <div>
        <p><strong>Title:</strong>{{$book->title}}</p>
        <p><strong>Auther:</strong>{{$book->auther}}</p>
        <p><strong>Type:</strong>{{$book->type}}</p>
        <p><strong>Description:</strong>{{$book->description}}</p>
    </div>
@endsection