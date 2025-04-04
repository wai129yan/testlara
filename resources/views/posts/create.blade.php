@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<div class="container mt-2">
    <h2 class="text-center mb-2 text-secondary ">Create Post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
      <!-- Title -->
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title">
      </div>

      <!-- Content -->
      <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter post content"></textarea>
      </div>

      <!-- Slug -->
      <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter post slug">
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
  </div>

@endsection('content')
