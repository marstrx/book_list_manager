@extends("layout.app")

@section("content")
    <h2>Available Books</h2>
    <a href="{{route("books.create")}}" class="btn btn-primary">Add New Book</a>

    <table class="book-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Type</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->auther}}</td>
                <td>{{$book->type}}</td>
                <td>{{$book->description}}</td>
                <td class="action-buttons">
                    <a href="{{route('books.show',$book->id)}}" class="btn btn-primary">Details</a>
                    <a href="{{route('books.edit',$book->id)}}" class="btn btn-edit">Edit</a>
                    <form action="{{route('books.destroy',$book->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection