<form action="{{ $actionRoute }}" method="POST" class="container d-flex flex-column">
    @csrf
    @method($method)

    <label class="h2 mt-5" for="title">Post title</label>
    <input type="text" name="title" value="{{ old("title", $post->title) }}" class="h3 p-1 mt-3">
    @include("includes.error", [$inputName = "title"])

    <label class="h2" for="content">Post content</label>
    <textarea name="content" cols="30" rows="10" class="h4 mt-3">
        {{ old("content", $post->content) }}
    </textarea>
    @include("includes.error", [$inputName = "content"])

    <label class="h2" for="post_image_url">Post image</label>
    <input type="text" name="post_image_url" value="{{ old("post_image_url", $post->post_image_url) }}" class="mb-5 mt-3 h3">
    @include("includes.error", [$inputName = "post_image_url"])
    
    <select name="category" id="category" class="mb-5">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit" class="w-25 align-self-center btn btn-primary">{{ $submitMessage }}</button>

</form>