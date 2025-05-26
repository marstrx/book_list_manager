@extends("layout.app")

@section("content")
    <div class="book-details">
        <h2>Book Details</h2>

        <div>
            <p><strong>Title:</strong> {{$book->title}}</p>
            <p><strong>Author:</strong> {{$book->auther}}</p>
            <p><strong>Type:</strong> {{$book->type}}</p>
            <p><strong>Description:</strong> {{$book->description}}</p>
        </div>

        <a href="{{route('books.index')}}" class="back-button">Back to List</a>
    </div>
@endsection