<x-template-layout>

@section('title', 'Edit Supplier Buku')

@section('namaHal', 'Form Edit Supplier Buku')

    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="card ml-2 mt-3">
                        <!-- <div class="card-header" style="background:white">
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body p-3 ml-4 mr-4 mt-3 mb-3">  
                            <form method="post" action="/supplier/{{$supplier->id}}">
                                    @method('patch') 
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="nama">nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama Buku" name="nama" value="{{$supplier->nama}}">
                                        @error('nama')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="no_tlp">no_tlp</label>
                                        <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" placeholder="Masukkan no_tlp Buku" name="no_tlp" value="{{$supplier->no_tlp}}">
                                        @error('no_tlp')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="alamat_email">alamat_email</label>
                                        <input type="text" class="form-control @error('alamat_email') is-invalid @enderror" id="alamat_email" placeholder="Masukkan alamat_email Buku" name="alamat_email" value="{{$supplier->alamat_email}}">
                                        @error('alamat_email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="alamat_sup">alamat_sup</label>
                                        <input type="text" class="form-control @error('alamat_sup') is-invalid @enderror" id="alamat_sup" placeholder="Masukkan alamat_sup Buku" name="alamat_sup" value="{{$supplier->alamat_sup}}">
                                        @error('alamat_sup')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="sumbit" class="btn btn-outline-primary mr-2">Simpan</button>
                                        <a href="/supplier" class="btn btn-outline-danger">Batal</a>  
                                    </div>
                            </form> 
                        </div>
                     <!-- /.card-body -->
                    <!-- </div> -->
                 <!-- /.card -->
                </div> 
            </div>
        </div>
    </div>
</x-template-layout>