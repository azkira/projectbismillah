<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Review;
use App\Role;
use App\user;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $books = Book::all();
        return view('home', ['books' => $books]);
    }

    public function showReview(Request $request)
    {
        $reviews = Review::all();
        return view('show', ['reviews' => $reviews]);
    }

    public function addReview(Review $review)
    {
        $reviews = DB::table('reviews')->get();
    }
}
