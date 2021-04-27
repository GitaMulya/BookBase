<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = Book::with('kategori', 'supplier')->latest()->paginate();
        
        if($request->has('cari')){
            $books = Book::where('judul','LIKE', '%'.$request->cari.'%')->get();
        }
        else{
            $books = Book::all();
            }
        return view('book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kat = Kategori::all();
        $sup = Supplier::all();
        return view('book.create', compact('kat', 'sup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn'=> 'required',
            'judul'=> 'required',
            'penulis'=> 'required',
            'penerbit'=> 'required',
            'kategori_id'=> 'required',
            'stok'=> 'required',
            'harga'=> 'required',
            'supplier_id'=> 'required'
        ],
        [
            'isbn.required'=>'ISBN Wajib Diisi!',
            'judul.required'=>'Judul Buku Wajib Diisi!',
            'penulis.required'=>'Nama Penulis Wajib Diisi!',
            'penerbit.required'=>'Nama Penerbit Wajib Diisi!',
            'kategori_id.required'=>'Kategori Buku Wajib Diisi!',
            'stok.required'=>'Stok Buku Wajib Diisi!',
            'harga.required'=>'Harga Buku Wajib Diisi!'
        ]);
        
        Book::create($request->all());
        return redirect('/books')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $kat = Kategori::all();
        $sup = Supplier::all();
        Book::with('kategori', 'supplier');
        return view('book.edit', compact('book', 'kat', 'sup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'isbn'=> 'required',
            'judul'=> 'required',
            'penulis'=> 'required',
            'penerbit'=> 'required',
            'kategori_id'=> 'required',
            'stok'=> 'required',
            'harga'=> 'required',
            'supplier_id'=> 'required',
        ],
        [
            'isbn.required'=>'ISBN Wajib Diisi!',
            'judul.required'=>'Judul Buku Wajib Diisi!',
            'penulis.size'=>'Nama Penulis Wajib Diisi!',
            'penerbit.unique'=>'Nama Penerbit Wajib Diisi!',
            'kategori_id.required'=>'Kategori Buku Wajib Diisi!',
            'stok.size'=>'Stok Buku Wajib Diisi!',
            'harga.required'=>'Harga Buku Wajib Diisi!',
            'supplier_id.required'=>'Nama Supplier Buku Wajib Diisi!'
        ]);
        Book::where('id', $book->id)
            ->update([
                'isbn' => $request->isbn, 
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'kategori_id' => $request->kategori_id,
                'stok' => $request->stok,
                'harga' => $request->harga,
                'supplier_id' => $request->supplier_id
            ]);
        return redirect('/books')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Book $book)
    // {
    //     Book::destroy($book->id);
    //     return redirect('/books')->with('status', 'Data Berhasil Dihapus');
    // }
    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books')->with('status', 'Data Berhasil Dihapus');
    }
}
