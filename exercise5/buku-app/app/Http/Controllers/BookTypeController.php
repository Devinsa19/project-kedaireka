<?php

namespace App\Http\Controllers;

use App\Models\BookType;
use Illuminate\Http\Request;

class BookTypeController extends Controller
{
    public function index()
    {
        $bookTypes = BookType::get();
        
        return view("bookTypes.table", compact('bookTypes'));
    }

    public function creategenre()
    {
        $bookTypes = BookType::get();
        return view("bookTypes.creategenre", compact("bookTypes"));
    }

    public function storegenre(Request $request)
    {
        $bookTypes = BookType::create([
            "genre" => $request-> genre,
            "kode_genre" =>$request->kode_genre,
        ]);

        return redirect("/book-types");
    }

    public function editgenre($id)
    {
        $type = BookType::findOrFail($id);

        return view("bookTypes.editgenre", compact("type"));
    }

    public function updategenre(Request $request, $id)
    {
        $type = BookType::findOrFail($id);

        $type->update([
            "genre" => $request->genre ?? $type->genre,
            "kode_genre" => $request->kode_genre ?? $type->kode_genre,
        ]);
        return redirect("/book-types");
    }

    public function destroygenre($id)
    {
        $type = BookType::findOrFail($id);
        $type->delete();

        return redirect("/book-types");
    }

}
