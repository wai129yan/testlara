@extends('layouts.app')
@extends('layouts.nav')
@section('content')


<div class="container  mt-5 border shadow-sm">
   <div class="text-center m-5">
    <h5><strong class="text-danger">Title:</strong> {{ $post->title }}</h5>
    <p><strong class="text-danger">Content:</strong> {{ $post->content }}</p>
    <p><strong class="text-danger">Slug:</strong> {{ $post->slug }}</p>
    <a href="{{ route('posts.index') }}">Back to List</a>
   </div>
</div>

@endsection('content')
