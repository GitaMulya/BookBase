<x-template-layout>

@section('title', 'Tambah Data Supplier')

@section('namaHal', 'Form Tambah Data Supplier')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card ml-2 mt-4 mb-5">
                        <!-- <div class="card-header" style="background:white">
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body p-3 ml-4 mr-4 mt-3 mb-3">   
                            <form method="post" action="/supplier">
                                    @csrf
                                    <div class="row justify-content-start mb-2">
                                        <div class="col-6 mb-3">
                                            <div class="form-group mb-3">
                                                <label for="nama">Nama <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Supplier" name="nama" value="{{old('nama')}}">
                                                @error('nama')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="form-group mb-3">
                                                <label for="no_tlp">Nomor Kontak <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" placeholder="Masukkan Nomor Kontak Supplier" name="no_tlp" value="{{old('no_tlp')}}">
                                                @error('no_tlp')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mb-2">
                                        <div class="col-6 mb-3">
                                            <div class="form-group mb-3">
                                                <label for="alamat_email">Email <span style="color: red; display:block; float:right">*</label>
                                                <input type="email" class="form-control @error('alamat_email') is-invalid @enderror" id="alamat_email" placeholder="Masukkan Nama Email Supplier" name="alamat_email" value="{{old('alamat_email')}}">
                                                @error('alamat_email')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="form-group mb-3">
                                                <label for="alamat_sup">Alamat <span style="color: red; display:block; float:right">*</label>
                                                <input type="text" class="form-control @error('alamat_sup') is-invalid @enderror" id="alamat_sup" placeholder="Masukkan Nama Alamat Supplier" name="alamat_sup" value="{{old('alamat_sup')}}">
                                                @error('alamat_sup')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="sumbit" class="btn btn-outline-primary mr-3">Tambah</button>
                                        <a href="/supplier" class="btn btn-outline-danger">Batal</a>  
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