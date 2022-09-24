@extends("layouts.app")

@section("content")
        <h2 class="text-center h1">
            {{ $category->name }}
        </h2>
    <h4 class="text-center my-5">
        Posts for that category
    </h4>
    @foreach ($category->posts as $post)
        @include("admin.categories.includes.post", $post)
    @endforeach
@endsection