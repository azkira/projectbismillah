<?php

namespace App\Http\Controllers;

use App\Book;
use App\Role;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gate;

class BooksController extends Controller
{
    public function novel()
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'novel')->get();
        return view('novels', ['books' => $books]);
    }

    public function comic()
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'comic')->get();
        return view('philosophy',  ['books' => $books]);
    }

    public function philosophy()
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'philosophy')->get();
        return view('philosophy',  ['books' => $books]);
    }

    public function psychology()
    {

        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }
        $books = DB::table('books')->where('type', 'psychology')->get();
        return view('psychology',  ['books' => $books]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = Book::all();
        return view('allcateg', ['books' => $books]);
    }

    public function search(Request $request)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $search = $request->search;

        $books = DB::table('books')
            ->where('title', 'like', "%" . $search . "%")
            ->orWhere('author', 'like', "%" . $search . "%")
            ->orWhere('publisher', 'like', "%" . $search . "%")
            ->orWhere('type', 'like', "%" . $search . "%")
            ->paginate();

        return view('search', ['books' => $books]);
    }

    public function sort(Request $request)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')
            ->orderBy('title')->paginate();

        return view('sort', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
