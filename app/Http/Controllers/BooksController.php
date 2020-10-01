<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index(){
      $books = Book::all()->sortByDesc('sold')->take(9);
      return view('welcome', ['books' => $books]);
    }
    public function allBooks(){
      $books = Book::paginate(6);
      echo $books;
      return view('all-books', ['books' => $books]);
    }
    public function book($id){
      $book = Book::all()->where('id', $id)->first();
      return view('book', ['book' => $book]);
    }
}
