@extends('layouts.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="m-1 border border-dark shadow p-2 rounded">
        <h1 class="h1">{{ $book->title }}</h1>
        <p><b>author:</b> {{ $book->author }}</p>
        <p><b>[pages]:</b> {{ $book->pages }}</p>
        <p><b>date:</b> {{ $book->date }}</p>
        <p><b>price:</b> {{ $book->price }}LE</p>
      </div>
  </div>
</div>
@endsection
