<form action="{{ $actionRoute }}" method="POST" class="container d-flex flex-column">
    @csrf
    @method($method)

    <label class="h2 mt-5" for="title-input">Post title</label>
    <input type="text" name="title" id="title-input" value="{{ old("title", $post->title) }}" class="h3 p-1 mt-3">
    @include("includes.error", [$inputName = "title"])

    <label class="h2" for="content-input">Post content</label>
    <textarea name="content" id="content-input"cols="30" rows="10" class="h4 mt-3">
        {{ old("content", $post->content) }}
    </textarea>
    @include("includes.error", [$inputName = "content"])

    <label class="h2" for="post_image_url-input">Post image</label>
    <input type="text" name="post_image_url" id="post_image_url-input" value="{{ old("post_image_url", $post->post_image_url) }}" class="mb-5 mt-3 h3">
    @include("includes.error", [$inputName = "post_image_url"])
    
    <h4>Category</h4>
    <select name="category" id="category-input" class="mb-5">
        @foreach ($categories as $category)
            <option 
            {{ $category->id == $post->category->id ? "selected" : "" }}
            value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @include("includes.error", [$inputName = "category"])

    <h4>Tags</h4>
    @forelse ($tags as $tag)
    <div class="form-check form-check-inline">
        <input class="form-check-input"type="checkbox" name="tags[]" id="tag-input" value="{{ $tag->id }}">
        <label class="form-check-label" for="tag-input">{{ $tag->name }}</label>
    </div>

    @empty
        <p>No tags available.</p>
    @endforelse

    <button type="submit" class="w-25 align-self-center mt-5 btn btn-primary">{{ $submitMessage }}</button>

</form>