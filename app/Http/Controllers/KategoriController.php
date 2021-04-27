<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategori = Kategori::all();
        if($request->has('cari')){
            $kategori = Kategori::where('kategori','LIKE', '%'.$request->cari.'%')->get();
        }
        else{
            $kategori = Kategori::all();
            }
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $will_insert = $request;
        Kategori::create($will_insert);
        return redirect('/kategori');
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
            'kategori'=> 'required'
        ],
        [
            'kategori.required'=>'Kategori Wajib Diisi!',
        ]);

        Kategori::create([
            'kategori' => $request->kategori,
        ]);
        return redirect('/kategori')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori= Kategori::find($id);
        return view('kategori.edit', compact('kategori'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        // $request->validate([
        //     'kategori'=> 'required'
        // ]);

        // Kategori::where('id', $kategori->id)
        //     ->update([
        //         'kategori' => $request->kategori,
        //     ]);
        // return redirect('/katgeori')->with('status', 'Data Berhasil Diubah');   

        $request->validate([
            'kategori'=> 'required'
        ],
        [
            'kategori.required'=>'Kategori Wajib Diisi!',
        ]);

        Kategori::where('id', $kategori->id)
            ->update([
             'kategori' => $request->kategori,
        ]);
        return redirect('/kategori')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
    //     Kategori::destroy($kategori->id);
    //     return redirect('/kategori')->with('status', 'Data Berhasil Dihapus');
    }
    public function delete($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/kategori')->with('status', 'Data Berhasil Dihapus');
    }
}
