@extends('layouts.layout')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12 mt-4">
        <h2 class="h1 text-primary border-bottom border-primary">All Books</h2>
      </div>
      @foreach($books as $book)
      <div class="col-md-4">
        <div class="m-1 border border-dark shadow p-2 rounded">
          <h1 class="h1">{{ $book->title }}</h1>
          <p><b>author:</b> {{ $book->author }}</p>
          <p><b>price:</b> <span class="badge badge-primary">{{ $book->price }}LE</span></p>
          <a href='/books/{{$book->id}}' class="btn btn-primary float-right">Details</a>
          <div class="clearfix"></div>
        </div>
      </div>
      @endforeach
      <div class="col-md-12">
        {{ $books->links() }}
      </div>

  </div>
</div>
@endsection
