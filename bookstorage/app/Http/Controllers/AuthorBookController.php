<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
class AuthorBookController extends Controller
{
    	public function getBooksByAuthor($id)
		{
			$author = Author::with('book')->whereName($name)->first();
			return $author->book;
		}
}
