@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
  <div class="books-container">
    @foreach($books as $book)
    <div class="book">
      <h1 class="title">{{ $book->title }}</h1>
      <p><b>author:</b> {{ $book->author }}</p>
      <p><b>pages:</b> {{ $book->pages }}</p>
      <p><b>date:</b> {{ $book->date }}</p>
      <h4><b>preic:</b> {{ $book->price }}LE</h4>
    </div>
    @endforeach
  </div>
</div>
@endsection
