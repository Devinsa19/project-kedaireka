<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\BookType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        // $books = Book::get();

        //Inner Join
        $books = DB::table("books")
                    ->join("book_types", "books.book_types_id", "=", "book_types.id")
                    ->select("books.*", "book_types.genre as genrebuku" )
        //order By
                    ->orderBy("tahun_terbit", "desc")
                    ->get();
        

        return view("books.table", compact('books'));
    }

    public function create()
    {
        $bookTypes = BookType::get();
        return view("books.create", compact("bookTypes"));
    }

    public function store(Request $request)
    {
        $books = Book::create([
            "book_types_id" => $request-> book_types_id,
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
        $bookTypes = BookType::get();

        return view("books.edit", compact("book", "bookTypes"));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $book->update([
            "book_types_id" => $request->book_types_id ?? $book->book_types_id,
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
