@extends('welcome')
@section('content')

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Update author</h3>
        <form action="{{ route('authors.update', $author->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name"
              value="{{ $author->name }}" required>
          </div>
          <label for="biography">biography</label>
          <input type="text" class="form-control" id="biography" name="biography"
            value="{{ $author->biography }}" required>
        </div>
          <div class="form-group">
            <label for="birthdate">birthdate</label>
            <input value="{{ $author->birthdate }}" type="text" class="form-control" id="birthdate" name="birthdate" required>
          </div>
          
          <button type="submit" class="btn mt-3 btn-primary">Update author</button>
        </form>
      </div>
    </div>
  </div>