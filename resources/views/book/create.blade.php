<x-template-layout>

@section('title', 'Tambah Data Buku')

@section('namaHal', 'Form Tambah Data Buku')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card ml-2 mt-3">
                        <!-- <div class="card-header" style="background:white">
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body p-3 ml-4 mr-4 mt-3 mb-3">   
                            <form method="post" action="/books">
                                    @csrf
                                    <div class="row justify-content-start mb-2">
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="isbn">ISBN <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" placeholder="Masukkan ISBN Buku" name="isbn" value="{{old('isbn')}}">
                                                @error('isbn')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="judul">Judul <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukkan Judul Buku" name="judul" value="{{old('judul')}}">
                                                @error('judul')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mb-2">
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="penulis">Penulis <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="Masukkan Nama Penulis Buku" name="penulis" value="{{old('penulis')}}">
                                                @error('penulis')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="penerbit">Penerbit <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" placeholder="Masukkan Nama Penerbit Buku" name="penerbit" value="{{old('penerbit')}}">
                                                @error('penerbit')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mb-2">
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="stok">Stok <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" placeholder="Masukkan Stok Buku" name="stok" value="{{old('stok')}}">
                                                @error('stok')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="harga">Harga <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan Harga Buku" name="harga" value="{{old('harga')}}">
                                                @error('harga')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mb-2">
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="kategori_id">Pilih Kategori <span style="color: red; display:block; float:right">*</label>
                                                <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori_id">Kategori
                                                    <option disabled value>Pilih Kategori Buku</option>
                                                    @foreach ($kat as $item)
                                                    <option value="{{$item->id}}">{{$item->kategori}}</option>
                                                    @endforeach
                                                </select>
                                                @error('kategori_id')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="supplier_id">Pilih Supplier <span style="color: red; display:block; float:right">*</label>
                                                <select class="form-control @error('supplier_id') is-invalid @enderror" name="supplier_id" id="supplier_id">Supplier
                                                    <option disabled value>Pilih Supplier Buku</option>
                                                    @foreach ($sup as $item)
                                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                                @error('supplier_id')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                @enderror 

                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="sumbit" class="btn btn-outline-primary mr-3">Tambah</button>
                                        <a href="/books" class="btn btn-outline-danger">Batal</a>  
                                    </div>
                            </form> 
                         </div>
                     <!-- /.card-body -->
                    </div>
                 <!-- /.card -->
                </div> 
            </div>
        </div>
    </div>
</x-template-layout>