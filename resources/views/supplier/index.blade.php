<x-template-layout>

@section('title', 'Supplier Buku')

@section('namaHal', 'Supplier Buku')

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
                        <a href="/supplier/create" class="btn btn-outline-success">Tambah Data <i class="fas fa-plus ml-2"></i></a>
                    </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table id="suppliertb" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No tlp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $data) 
                        <tr>
                            <td scope="row">{{ $loop->iteration}}</td>
                            <td>{{ $data->nama}}</td>
                            <td>{{ $data->no_tlp}}</td>
                            <td>{{ $data->alamat_email}}</td>
                            <td>{{ $data->alamat_sup}}</td>
                            <td>
                                <a href="/supplier/{{$data->id}}/edit" class="btn btn-outline-success btn-sm mr-2">Edit</a>
                                <!-- <a href="#" data-id="{{$data->id}}" class="btn btn-outline-success btn-sm btn-edit" data-toggle="modal" data-target="#modal-edit">Edit</a> -->
                                <a href="/supplier/{{$data->id}}/delete" class="btn btn-outline-danger btn-sm" id="btn-hapus">Hapus</a>
                                <!-- <form action="/supplier/{{$data->id}}" method="post" class="d-inline">
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