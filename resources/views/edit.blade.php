@extends('layouts.navbar')

@section('css-imports')
  <link rel="stylesheet" href="/css/edit.css">
@endsection

@section('content')
  <div class="update-page-content">
    <p class="h5">Update The Content</p>
  </div>

  <form action="/edit/{{$content['id']}}" method="post">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="title">Title</label>
          <input type="text" id="title" name="title" class="form-control" value="{{$content['title']}}"/>
        </div>
      </div>
    </div>

    <!-- Message input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="description">Description</label>
      <textarea class="form-control" id="desc" name="description" rows="4">{{$content['content']}}</textarea>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4" value="update">Update</button>
  </form>
@endsection
