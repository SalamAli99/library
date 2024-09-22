@extends('welcome')
@section('content')

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Update Post</h3>
        <form action="{{ route('books.update', $book->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"
              value="{{ $book->title }}" required>
          </div>
          <div class="form-group">
            <label for="publication">publication date</label>
            <input value="{{ $book->publication }}" type="text" class="form-control" id="publication" name="publication" required>
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <input value="{{ $book->type }}" type="text" class="form-control" id="type" name="type" rows="3" required>
          </div>
          <div class="form-group">
            <label for="status">status</label>
            <input value="{{ $book->status }}" type="text" class="form-control" id="status" name="status" rows="3" required>
          </div>
          <div class="form-group">
            <label for="author">author</label>
            <input value="{{ $book->author }}" type="text" class="form-control" id="author" name="author" rows="3" required>
          </div>
          <button type="submit" class="btn mt-3 btn-primary">Update Book</button>
        </form>
      </div>
    </div>
  </div>