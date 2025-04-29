@extends("layout.app")

@section("content")
    <h2>Availale Books</h2>
    <a href="{{route("books.create")}}">Add New Book</a>

    <table>
        <thead>
            <td>
                <th>Title</th>
                <th>Auther</th>
                <th>Type</th>
                <th>Description</th>
                <th>Actions</th>
            </td>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->auther}}</td>
                <td>{{$book->type}}</td>
                <td>{{$book->description}}</td>
                <td>
                    <a href="{{route('books.show',$book->id)}}">Details</a>
                    <a href="{{route('books.edit',$book->id)}}">Edit</a>
                    <form action="{{route('books.destroy',$book->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection