<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;

class BooksController extends Controller
{
    public function bestSeller(){
      $books = Book::all()->sortByDesc('sold')->take(9);
      return view('welcome', ['books' => $books]);
    }
    public function index(){
      $books = Book::paginate(6);
      echo $books;
      return view('all-books', ['books' => $books]);
    }
    public function show($id){
      $book = Book::findOrFail($id);
      return view('book', ['book' => $book]);
    }
    public function create(){
      return view('add-book');
    }
    public function store(Request $request){
      $book = new Book;
      $book->title = $request->title;
      $book->author = $request->author;
      $book->price = $request->price;
      $book->pages = $request->pages;
      $book->date = $request->date;
      $book->sold = 0;
      $book->save();
      error_log($book);
      return redirect('/books/add-book')->with('msg', 'your book published successfully');
    }
    public function destroy($id){
      $book = Book::findOrFail($id);
      $book->delete();
      return redirect('/books');
    }
}
