<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $supplier = Supplier::all();
        if($request->has('cari')){
            $supplier = Supplier::where('supplier','LIKE', '%'.$request->cari.'%')->get();
        }
        else{
            $supplier = Supplier::all();
            }
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('supplier.create');
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
            'nama'=> 'required',
            'no_tlp'=> 'required',
            'alamat_email'=> 'required',
            'alamat_sup'=> 'required'
        ],
        [
            'nama.required'=>'Nama Supplier Wajib Diisi!',
            'no_tlp.required'=>'Nomor Kontak Supplier Wajib Diisi!',
            'alamat_email.required'=>'Email Supplier Wajib Diisi!',
            'alamat_sup.required'=>'Alamat Supplier Wajib Diisi!'
        ]);

        Supplier::create([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat_email' => $request->alamat_email,
            'alamat_sup' => $request->alamat_sup
        ]);
        return redirect('/supplier')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier= Supplier::find($id);
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        
        $request->validate([
            'nama'=> 'required',
            'no_tlp'=> 'required',
            'alamat_email'=> 'required',
            'alamat_sup'=> 'required'
        ],
        [
            'nama.required'=>'Nama Supplier Wajib Diisi!',
            'no_tlp.required'=>'Nomor Kontak Supplier Wajib Diisi!',
            'alamat_email.required'=>'Alamat Supplier Wajib Diisi!',
            'alamat_sup.required'=>'Email Supplier Wajib Diisi!'
        ]);

        Supplier::where('id', $supplier->id)
            ->update([
             'nama' => $request->nama,
             'no_tlp' => $request->no_tlp,
             'alamat_email' => $request->alamat_email,
             'alamat_sup' => $request->alamat_sup
        ]);
        return redirect('/supplier')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('/supplier')->with('status', 'Data Berhasil Dihapus');
    }
}
