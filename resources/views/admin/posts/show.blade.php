@extends("layouts.app")

@section("content")
    @include("post", $post)


    <div class="d-flex container justify-content-center w-100 post-footer">
        <a href="{{ route("admin.edit", $post->id) }}" class="btn btn-lg btn-primary m-3">Edit</a>
        <form action="{{ route("admin.destroy", $post->id) }}" class="m-3" method="post">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-lg btn-danger">Delete</button>
        </form>
    </div>
@endsection