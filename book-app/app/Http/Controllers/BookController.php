<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
public function index()
{
$books = Book::all();
return view('index', compact('books'));
}

public function search(Request $request)
{
$search = $request->input('search');
$books = Book::where('title', 'like', '%' . $search . '%')->get();
return view('search', compact('books'));
}
}
