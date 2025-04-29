@extends("layout.app")

@section("content")
    <h2>Add a new book to the list</h2>

    <form action="{{route("books.store")}}" method="POST">
        @csrf
        <div>
            <label for="title">title</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="auther">auther</label>
            <input type="text" id="auther" name="auther">
        </div>
        <div>
            <label for="type">type</label>
            <input type="text" id="type" name="type">
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" id="description" name="description">
        </div>

        <div>
            <button type="submit">Add</button>
        </div>
    </form>
@endsection