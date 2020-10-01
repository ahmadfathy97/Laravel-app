<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Shop</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <nav class="p-3 bg-primary fixed-top">
      <a class="m-2 text-light" href="/">Home</a>
      <a class="m-2 text-light" href="/books">All Books</a>
      <a class="m-2 text-light" href="/books/add-book">Add Book</a>
    </nav>

    @yield('content')

    <footer >
      <p class="p-2 text-center bg-secondary text-light">All rights reserved &copy; 2020</p>
    </footer>
  </body>
</html>
