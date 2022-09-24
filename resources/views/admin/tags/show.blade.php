@extends("layouts.app")

@section("content")
        <h2 class="text-center h1">
            {{ $selectedTag->name }}
        </h2>
    <h4 class="text-center my-5">
        Posts for that tag
    </h4>
    @foreach ($selectedTag->posts as $post)
        @include("admin.tags.includes.post", $post)
    @endforeach
@endsection