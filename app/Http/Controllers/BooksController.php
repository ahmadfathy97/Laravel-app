<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;

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
    public function addBook(){
      return view('add-book', ['success' => false]);
    }
    public function newBook(Request $request){
      $title = $request->title;
      $author = $request->author;
      $price = $request->price;
      $pages = $request->pages;
      $date = $request->date;
      DB::table('Books')->insert([
        'title'=> $title,
        'pages'=> $pages,
        'price'=> $price,
        'author'=> $author,
        'date'=> $date,
        'sold'=> 0
      ]);
      return view('add-book', ['success' => true]);
    }
}
