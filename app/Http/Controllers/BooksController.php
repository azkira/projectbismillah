<?php

namespace App\Http\Controllers;

use App\Book;
use App\Role;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gate;
use App\IlluminateDatabaseEloquentModel;
use App\KyslikColumnSortableSortable;
use Illuminate\Support\Facades\Redirect;
use Image;
use Auth;
use App\Post;


class BooksController extends Controller
{
    public function novel()
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'novel')->orderBy('created_at', 'desc')->get();
        return view('novels', ['books' => $books]);
    }

    public function comic()
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'comic')->orderBy('created_at', 'desc')->get();
        return view('comics',  ['books' => $books]);
    }

    public function philosophy()
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'philosophy')->orderBy('created_at', 'desc')->get();
        return view('philosophy',  ['books' => $books]);
    }

    public function psychology()
    {

        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }
        $books = DB::table('books')->where('type', 'psychology')->orderBy('created_at', 'desc')->get();
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

    public function sortsearch(Request $request)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $search = $request->search;

        $books = DB::table('books')
            ->orderBy('title')
            ->where('title', 'like', "%" . $search . "%")
            ->orWhere('author', 'like', "%" . $search . "%")
            ->orWhere('publisher', 'like', "%" . $search . "%")
            ->orWhere('type', 'like', "%" . $search . "%")
            ->paginate();
        return view('sortsearch', compact('search'));
        //return view('search', ['books' => $books]);
    }

    public function sorthome(Request $request)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->orderBy('title')->paginate();

        return view('home')->with('books', $books);
    }

    public function sorthomedesc(Request $request)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->orderBy('title', 'DESC')->paginate();

        return view('home')->with('books', $books);
    }

    public function sortcomic(Request $request)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'comic')->orderBy('title')->paginate();

        return view('comics')->with('books', $books);
    }

    public function sortcomicdesc(Request $request)
    {
        /*
            if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')
            ->orderBy('title')->paginate();

        return view('sort', ['books' => $books]);
        */
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'comic')->orderBy('title', 'DESC')->paginate();

        return view('comics')->with('books', $books);
    }

    public function sortphilosophy(Request $request)
    {
        /*
            if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')
            ->orderBy('title')->paginate();

        return view('sort', ['books' => $books]);
        */
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'philosophy')->orderBy('title')->paginate();

        return view('philosophy')->with('books', $books);
    }

    public function sortphilosophydesc(Request $request)
    {
        /*
            if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')
            ->orderBy('title')->paginate();

        return view('sort', ['books' => $books]);
        */
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'philosophy')->orderBy('title', 'DESC')->paginate();

        return view('philosophy')->with('books', $books);
    }

    public function sortpsychology(Request $request)
    {
        /*
            if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')
            ->orderBy('title')->paginate();

        return view('sort', ['books' => $books]);
        */
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'psychology')->orderBy('title')->paginate();

        return view('psychology')->with('books', $books);
    }

    public function sortpsychologydesc(Request $request)
    {
        /*
            if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')
            ->orderBy('title')->paginate();

        return view('sort', ['books' => $books]);
        */
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'psychology')->orderBy('title', 'DESC')->paginate();

        return view('psychology')->with('books', $books);
    }

    public function sortnovel(Request $request)
    {
        /*
            if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')
            ->orderBy('title')->paginate();

        return view('sort', ['books' => $books]);
        */
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'novel')->orderBy('title')->paginate();

        return view('novels')->with('books', $books);
    }

    public function sortnoveldesc(Request $request)
    {
        /*
            if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')
            ->orderBy('title')->paginate();

        return view('sort', ['books' => $books]);
        */
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $books = DB::table('books')->where('type', 'novel')->orderBy('title', 'DESC')->paginate();

        return view('novels')->with('books', $books);
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
    public function show(Book $book, Request $request)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $reviews = DB::table('reviews')->where('which_book', $book->id)->get();

        return view('show')->with(compact('book'))->with('reviews', $reviews);
    }

    public function addReview(Request $request)
    {
        if (Gate::denies('access-book')) {
            return redirect(route('login'));
        }

        $data = $request->all();
        $reviews = new Review();
        $reviews->person_name = Auth::user()->name;
        $reviews->review_content = $data['InputReview'];
        $reviews->which_book = $data['InputWhich'];
        $reviews->save();
        $request->session()->flash('success', $reviews->title . ' Comment has been updated');
        return redirect()->back();
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

    public function addbook(Request $request)
    {
        return view('user.addbook',  ['user' => Auth::user()]);
    }
}
