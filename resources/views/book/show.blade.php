<x-template-layout>

@section('title', 'Detail Buku')

@section('namaHal', 'Detail Buku')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-4">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="card-title text-center fs-4 mb-2">{{$book->judul}}</li>
                                <li class="list-group-item fs-6">ISBN : {{$book->isbn}}</li>
                                <li class="list-group-item fs-6">Penulis : {{$book->penulis}}</li>
                                <li class="list-group-item fs-6">Penerbit : {{$book->penerbit}}</li>
                                <li class="list-group-item fs-6">Kategori : {{$book->kategori->kategori}}</li>
                                <li class="list-group-item fs-6">Stok    : {{$book->stok}}</li>
                                <li class="list-group-item fs-6">Harga   : {{$book->harga}}</li>
                                <li class="list-group-item fs-6">Supplier : {{$book->supplier->nama}}</li>
                            </ul>
                            <div class="d-flex justify-content-end">
                                <a href="{{$book->id}}/edit" class="btn btn-outline-success mr-3">Edit</a>
                                <a href="/books/{{$book->id}}/delete" class="btn btn-outline-danger mr-3" id="btn-hapus">Hapus</a>
                                <!-- <form action="/books/{{$book->id}}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf 
                                  <button type="submit" class="btn btn-outline-danger mr-3">Hapus</button>
                                </form> -->
                                <a href="/books" class="btn btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                </div>
            </div> 
        </div>
    </div>
</x-template-layout>