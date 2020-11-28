<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use Auth;
use App\UploadBooks;
use App\Book;
use Gate;
use Illuminate\Support\Facades\DB;

class UploadBooksController extends Controller
{
    public function addBook(Request $request)
    {
        if (Gate::denies('edit-users')) {
            return redirect(route('admin.users.index'));
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            $book = new Book;
            $book->title = $data['inputTitle'];
            $book->author = $data['inputAuthor'];
            $book->publisher = $data['inputPublisher'];
            $book->synopsis = $data['inputSynopsis'];
            $book->type = $data['inputType'];
            if (!empty($data['inputSynopsis'])) {
                $book->synopsis = $data['inputSynopsis'];
            } else {
                $book->synopsis = " ";
            }
            if ($request->hasfile('image')) {
                $img_tmp = $request->file('image');
                if ($img_tmp->isValid()) {



                    $extension = $img_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $img_path = 'img/' . $filename;

                    Image::make($img_tmp)->save($img_path);

                    $book->image = $filename;
                }
            }
            if ($request->hasfile('pdf')) {
                $pdf_tmp = $request->file('pdf');
                if ($pdf_tmp->isValid()) {

                    $fileName = time() . '.' . $request->pdf->extension();



                    $request->pdf->move(public_path('pdf/'), $fileName);

                    $book->pdf = $fileName;
                }
            }
            $book->save();
            $request->session()->flash('success', $book->title . ' Has been uploaded');
            return redirect()->back();
        }
        return view('user.addbook');
    }

    public function edit(Book $book)
    {
        if (Gate::denies('edit-users')) {
            return redirect(route('admin.users.index'));
        }
        $book = Book::all();

        return view('user.profile')->with([
            'book' => $book,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->title = $request->title;
        $book->author = $request->author;
        if ($book->save()) {
            $request->session()->flash('success', $book->tittle . ' has been updated');
        } else {
            $request->session()->flash('error', 'Error');
        }
        return redirect()->route('user.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        if (Gate::denies('delete-users')) {
            return redirect(route('user.profile'));
        }

        return $book;
    }
}
