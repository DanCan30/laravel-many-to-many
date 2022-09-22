@extends("layouts.app")

@section('content')
    <div class="container">
        @if (session("deleted"))
            <div class="warn delete-warn">
                Post n°{{ session("deleted") }} deleted.
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Username</td>
                        <td>Date</td>
                        <td>Category</td>
                        <td></td>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route("admin.show", $post->id) }}">{{ $post->title }}</a></td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->date }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td class="d-flex">
                                    <a href="{{ route("admin.edit", $post->id) }}" class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ route("admin.destroy", $post->id) }}" method="POST" class="delete-element-button">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-sm text-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h2>There are no posts.</h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script defer>


const deleteElement = document.querySelectorAll(".delete-element-button");

deleteElement.forEach(element=> {
    
    element.addEventListener("submit", function(event) {

        event.preventDefault();

        const response = window.confirm("Your choice can't be reverted. Are you sure you want to delete this record?");
        if (response) {
            element.submit();
        } 
            
    })
}

)
    </script>
@endsection