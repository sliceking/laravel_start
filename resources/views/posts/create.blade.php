@extends('layouts.master')

@section('content')
<div class="col-sm-8">
    <h1>Create Posts</h1>
    <hr>
    <form method="POST" action="/posts">
        {{  csrf_field()  }}
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
          <label for="body">Body:</label>
          <input type="text" class="form-control" id="body" name="body">
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
      </form>
</div>

@endsection