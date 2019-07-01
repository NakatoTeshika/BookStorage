<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
	public function index()
	{
		return view('welcome');
	}
	public function create()
	{
		return view('create');
	}
	public function store(Request $request)
    {
      $request->validate([
        'book_name'=>'required',
        'book_year'=>'required|integer',
        'book_price'=> 'required|integer',
        'book_qty'=>'required|integer',
        'book_pages'=>'required|integer',
        'book_desc'=>'required',
        'book_genre'=>'required|integer',
        'book_ph'=>'required|integer',
        'book_binding'=>'required|integer'
      ]);
      $book = new Book([
        'book_name' => $request->get('book_name'),
        'book_year'=> $request->get('book_year'),
        'book_price'=> $request->get('book_price'),
        'book_qty' => $request->get('book_qty'),
        'book_pages'=> $request->get('book_pages'),
        'book_desc'=> $request->get('book_desc'),
        'book_genre' => $request->get('book_genre'),
        'book_ph'=> $request->get('book_ph'),
        'book_binding'=> $request->get('book_binding')
      ]);
      $share->save();
      return redirect('/books')->with('успешно', 'Книга была добавлена');
    }
    //
}
