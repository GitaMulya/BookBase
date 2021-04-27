<x-template-layout>

@section('title', 'Edit Kategori Buku')

@section('namaHal', 'Form Edit Kategori Buku')

    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="card ml-2 mt-3">
                        <!-- <div class="card-header" style="background:white">
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body p-3 ml-4 mr-4 mt-3 mb-3">  
                            <form method="post" action="/kategori/{{$kategori->id}}">
                                    @method('patch') 
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="kategori">Kategori</label>
                                        <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" value="{{$kategori->kategori}}">
                                        @error('kategori')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="sumbit" class="btn btn-outline-primary mr-2">Simpan</button>
                                        <a href="/kategori" class="btn btn-outline-danger">Batal</a>  
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