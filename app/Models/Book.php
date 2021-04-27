<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['isbn', 'judul', 'penulis', 'penerbit', 'kategori_id', 'stok', 'harga','supplier_id', 'deskripsi'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    
    use HasFactory;
}
