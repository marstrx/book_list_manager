@extends("layout.app")

@section("content")
    <h2>Edit Book</h2>

    <form action="{{route('books.update',$book->id)}}" method="POST" class="edit-form">
        @method("PUT")
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{$book->title}}" required>
        </div>
        <div class="form-group">
            <label for="auther">Author</label>
            <input type="text" id="auther" name="auther" value="{{$book->auther}}" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" value="{{$book->type}}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{$book->description}}" required>
        </div>

        <div class="form-actions">
            <button type="submit">Update Book</button>
            <a href="{{route('books.index')}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection