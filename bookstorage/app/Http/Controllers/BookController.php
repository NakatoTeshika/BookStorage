<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
	public function index()
	{
		$books = Book::all();

        return view('index', compact('books'));
	}
	public function create()
	{
		return view('create');
	}
	public function show($id)
	{

	}
	public function store(Request $request)
    {
      // $request->validate([
      //   'Name'=>'required',
      //   'Year_of_publishing'=>'required|integer',
      //   'Price'=> 'required|integer',
      //   'Number_of_copies'=>'required|integer',
      //   'Number_of_pages'=>'required|integer',
      //   'Description'=>'required',
      //   'Genre'=>'required|integer',
      //   'Binding'=>'required|integer',
      //   'Public_house'=>'required|integer'
      // ]);
      $book = new Book([
        'Name' => $request->get('book_name'),
        'Year_of_publishing'=> $request->get('book_year'),
        'Price'=> $request->get('book_price'),
        'Number_of_copies' => $request->get('book_qty'),
        'Number_of_pages'=> $request->get('book_pages'),
        'Description'=> $request->get('book_desc'),
        'Genre_ID' => $request->get('book_genre'),
        'Binding_ID'=> $request->get('book_ph'),
        'Chiper_Public_house'=> $request->get('book_binding')
      ]);
      $book->save();
      return redirect('/books')->with('success', 'Книга была добавлена');
    }
    //
}
