<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index() {
    
        $transaksis = Transaksi::get();

        return view("transaksi.table", compact('transaksis'));
    }

    public function createtransaksi()
    {
        $books = Book::get();
        return view("transaksi.createtransaksi", compact("books"));
    }

    public function storetransaksi(Request $request){
        $transaksis = Transaksi::create([
            "no_faktur" => $request->no_faktur,
            "books_id" => $request->books_id,
            "jumlah" => $request->jumlah,
            "harga" => $request->harga,
        ]);
        return redirect("/transaksi");
    }

    public function edittransaksi($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $books = Book::get();

        return view("transaksi.edittransaksi", compact("transaksi", "books"));
    }

    public function updatetransaksi(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $transaksi->update([
            "no_faktur" => $request->no_faktur ?? $transaksi->no_faktur,
            "books_id" => $request->books_id ?? $transaksi->books_id,
            "jumlah" => $request->jumlah ?? $transaksi->jumlah,
            "harga" => $request->harga ?? $transaksi->harga,
        ]);

        return redirect("/transaksi");
    }

    public function destroytransaksi($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect("/transaksi");
    }


}
