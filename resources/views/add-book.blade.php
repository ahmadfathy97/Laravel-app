@extends('layouts.layout')

@section('content')
<div class="container pb-2 ">
  <div class="row">
    <div class="col-md-12 mt-12">
      @if(session('msg'))
      <p class="alert alert-success">{{ session('msg')}}</p>
      @endif
    </div>
    <div class="col-md-12 mt-12">
      <h2 class="h1 text-primary border-bottom border-primary">Add new Book</h2>
    </div>
    <div class="col-md-12">
      <form class="py-2 px-3 border border-primary rounded" action="" method="post">
        @csrf
        <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> -->
        <div class="form-group">
          <label for="">Title</label>
          <input class="form-control" type="text" name="title" required>
        </div>
        <div class="form-group">
          <label for="">Author</label>
          <input class="form-control" type="text" name="author" required>
        </div>
        <div class="form-group">
          <label for="">Pages</label>
          <input class="form-control" type="number" name="pages" required>
        </div>
        <div class="form-group">
          <label for="">Price</label>
          <input class="form-control" type="number" name="price" required>
        </div>
        <div class="form-group">
          <label for="">Date</label>
          <input class="form-control" type="date" name="date" required>
        </div>

        <div class="form-group">
          <input class="btn btn-primary float-right" type="submit" value="Add Book">
        </div>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>
@endsection
