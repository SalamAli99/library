@extends('welcome')
@section('content')
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Add a Book</h3>
        <form action="{{ route('books.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          <div class="form-group">
            <label for="publication">publication date</label>
            <input type="text" class="form-control" id="publication" name="publication" required>
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" rows="3" required>
          </div>
          <div class="form-group">
            <label for="status">status</label>
            <input type="text" class="form-control" id="status" name="status" rows="3" required>
          </div>
          <div class="form-group">
            <label for="author">author</label>
            <input type="text" class="form-control" id="author" name="author" rows="3" required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Create Book</button>
        </form>
      </div>
    </div>
  </div>