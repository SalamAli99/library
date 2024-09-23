@extends('welcome')
@section('content')


<!DOCTYPE html>
<html lang="en">

<body>
  
  <div class="container mt-5">
    <form action="{{ route('authors.search') }}" method="GET">
      <input type="text" name="search" placeholder="Search authors">
      <button type="submit">Search</button>
  </form>
    <a class="btn btn-sm btn-success" href={{ route('authors.create') }}>Add New author</a>

    <div class="row">
      @foreach ($authors as $author)
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $author->name }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $author->biography }}</p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('authors.edit', $author->id) }}"
            class="btn btn-primary btn-sm">Edit</a>
                </div>
                <div class="col-sm">
                    <form action="{{ route('authors.destroy', $author->id) }}" method="Post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>@extends('welcome')
@section('content')


<!DOCTYPE html>
<html lang="en">

<body>
  
  <div class="container mt-5">
    <a class="btn btn-sm btn-success" href={{ route('books.create') }}>Add New Book</a>

    <div class="row">
      @foreach ($books as $book)
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $book->title }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $book->type }}</p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('books.edit', $book->id) }}"
            class="btn btn-primary btn-sm">Edit</a>
                </div>
                <div class="col-sm">
                    <form action="{{ route('books.destroy', $book->id) }}" method="Post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>