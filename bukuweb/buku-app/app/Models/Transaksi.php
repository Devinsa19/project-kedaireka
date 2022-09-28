<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $fillable = ["no_faktur", "jumlah", "harga", "books_id"];

    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
