@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="text-center text-secondary">Testing About Code</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('posts.create') }}"> Create Company</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered shadow">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Post Title</th>
                    <th>Post Content</th>
                    <th>Post Slug</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>
                            <form action="{{ route('posts.destroy',$post->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                                <a class="btn btn-warning" href="{{ route('posts.show',$post->id) }}">Show</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{-- {!! $posts->links() !!} --}}
    </div>
</body>
</html>
@endsection('content')
