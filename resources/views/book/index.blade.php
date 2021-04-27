<x-template-layout>

@section('title', 'Stok Buku')

@section('namaHal', 'Stok Buku')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                @if (session('status'))
                    <!-- <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                      {{ session('status') }}
                      <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> -->
                  <div id="flash" data-flash="{{ session('status') }}"></div>
                @endif
            <div class="card mt-4">
              <div class="card-header">
                    <div class="d-grid gap-2 d-md-flex">
                        <a href="/books/create" class="btn btn-outline-success">Tambah Data <i class="fas fa-plus ml-2"></i></a>
                    </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table id="kategoritb" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $bk) 
                        <tr>
                            <td scope="row">{{ $loop->iteration}}</td>
                            <td>{{ $bk->isbn}}</td>
                            <td>{{ $bk->judul}}</td>
                            <td>{{ $bk->penulis}}</td>
                            <td>{{ $bk->kategori->kategori}}</td>
                            <td>{{ $bk->stok}}</td>
                            <td>{{ $bk->harga}}</td>
                            <td>
                                <a href="/books/{{$bk->id}}" class="btn btn-outline-info btn-sm mr-2">Detail</i></a>
                                <a href="/books/{{$bk->id}}/delete" class="btn btn-outline-danger btn-sm" id="btn-hapus">Hapus</a>
                                <!-- <form action="/books/{{$bk->id}}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf 
                                  <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                </form> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</x-template-layout>