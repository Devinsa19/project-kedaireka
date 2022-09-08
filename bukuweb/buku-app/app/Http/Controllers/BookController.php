<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::get();
        
        return view("books.index", compact('books'));
    }

    public function create()
    {
        return view("books.create");
    }

    public function store(Request $request)
    {
        $books = Book::create([
            "kode_buku" => $request->kode_buku,
            "judul_buku" => $request->judul_buku,
            "pengarang" => $request->pengarang,
            "penerbit" => $request->penerbit,
            "tahun_terbit" => $request->tahun_terbit, 
        ]);

        return redirect("/");
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view("books.edit", compact("book"));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $book->update([
            "kode_buku" => $request->kode_buku ?? $book->kode_buku,
            "judul_buku" => $request->judul_buku ?? $book->judul_buku,
            "pengarang" => $request->pengarang ?? $book->pengarang,
            "penerbit" => $request->penerbit ?? $book->penerbit,
            "tahun_terbit" => $request->tahun_terbit ?? $book->tahun_terbit,
        ]);

        return redirect("/");
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect("/");
    }
}
