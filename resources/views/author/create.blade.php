@extends('welcome')
@section('content')
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Add a author</h3>
        <form action="{{ route('authors.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="biography">biography</label>
            <input type="text" class="form-control" id="biography" name="biography" required>
          </div>
          <div class="form-group">
            <label for="birthdate">birthdate</label>
            <input type="text" class="form-control" id="birthdate" name="birthdate" rows="3" required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Create author</button>
        </form>
      </div>
    </div>
  </div>