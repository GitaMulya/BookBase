<?php

namespace App\Http\Controllers;
use App\Models\Book;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return view('admin.beranda');
    // }
    public function index(Request $request)
    {
        $books = Book::with('kategori')->latest()->paginate();
        if($request->has('cari')){
            $books = Book::where('judul','LIKE', '%'.$request->cari.'%')->get();
        }
        else{
            $books = Book::all();
            }
            return view('admin.beranda', ['books' => $books]);
    }
}
