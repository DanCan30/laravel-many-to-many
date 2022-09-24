@extends("layouts.app")

@section('content')
    <div class="container">
        @if (session("deleted"))
            <div class="warn delete-warn">
                Tag {{ session("deleted") }} deleted.
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <td>ID</td>
                        <td>Name</td>
                        <td><a href="{{ route("tags.create") }}" class="btn btn-sm btn-primary">Add</a></td>
                    </thead>
                    <tbody>
                        @forelse ($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td><a href="{{ route("tags.show", $tag->id) }}">{{ $tag->name }}</a></td>
                                <td class="d-flex">
                                    <a href="{{ route("tags.edit", $tag->id) }}" class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ route("tags.destroy", $tag->id) }}" method="POST" class="delete-element-button">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-sm text-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h2>There are no tags.</h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection