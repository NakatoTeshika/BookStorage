<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
class AuthorController extends Controller
{
	public function index()
	{
		$authors = Author::all();

        return view('authorIndex', compact('authors'));
	}
    public function create()
	{
		return view('author_add');
	}
	public function store(Request $request)
    {
      $author = new Author([
        'Name' => $request->get('author_name'),
        'Surname'=> $request->get('author_surname'),
        'Patronymic'=> $request->get('author_patronymic')
      ]);
      $author->save();
      return redirect('/authors')->with('success', 'Автор был добавлен');
    }
}
