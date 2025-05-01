@extends("layout.app")

@section("content")
    <h2>Add a new book to the list</h2>

    <form action="{{route('books.update',$book->id)}}" method="POST">
        @method("PUT")
        @csrf
        <div>
            <label for="title">title</label>
            <input type="text" id="title" name="title" value="{{$book->title}}">
        </div>
        <div>
            <label for="auther">auther</label>
            <input type="text" id="auther" name="auther" value="{{$book->auther}} ">
        </div>
        <div>
            <label for="type">type</label>
            <input type="text" id="type" name="type" value="{{$book->type}}">
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" id="description" name="description" value="{{$book->description}}">
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection