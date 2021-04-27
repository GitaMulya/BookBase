<x-template-layout>

@section('title', 'Kategori Buku')

@section('namaHal', 'Kategori Buku')

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
                         <a class="btn btn-outline-success" data-toggle="modal" data-target="#modal-create">Tambah Data <i class="fas fa-plus ml-2"></i></a>
                    </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table id="kategoritb" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $data) 
                        <tr>
                            <td scope="row">{{ $loop->iteration}}</td>
                            <td>{{ $data->kategori}}</td>
                            <td>
                                <a href="/kategori/{{$data->id}}/edit" class="btn btn-outline-success btn-sm mr-2">Edit</a>
                                <!-- <a href="#" data-id="{{$data->id}}" class="btn btn-outline-success btn-sm btn-edit" data-toggle="modal" data-target="#modal-edit">Edit</a> -->
                                <a href="/kategori/{{$data->id}}/delete" class="btn btn-outline-danger btn-sm" id="btn-hapus">Hapus</a>
                                <!-- <form action="/kategori/{{$data->id}}" method="post" class="d-inline" id="btn-hapus">
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
  <div class="modal fade" id="modal-create">
        <div class="modal-dialog modal-lg">
        <form method="post" action="/kategori" class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kategori Buku</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="kategori">Kategori<span style="color: red; display:block; float:right">*</label>
                        <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" value="{{old('kategori')}}">
                        @error('kategori')
                         <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-end">
              <button type="submit" class="btn btn-outline-primary">Simpan</button>
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>  
            </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>

  <!-- <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal fade" id="modal-edit" role="dialog" aria-labelledby=""> -->
        <!-- <div class="modal-dialog modal-lg"> -->
        <!-- <form method="post" action="/kategori" class="modal-content" id="editform">
            <div class="modal-header">
              <h4 class="modal-title">Edit Kategori Buku</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @method('patch') 
              @csrf
              <div class="form-group mb-3">
                  <label for="kategori">Kategori</label>
                  <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" value="">
                  @error('kategori')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>  
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-outline-primary">Simpan</button>
            </div>
        </form> -->
          <!-- /.modal-content -->
        <!-- </div> -->
        <!-- /.modal-dialog -->
    <!-- </div>
  <script>
   $('.btn-edit').on('click',function(){
      console.log($(this).data('id'))
      let id= $(this).data('id')
      $.ajax({
        url:'/kategori/${id}/edit',
        method:"GET",
        sucess: function(data){
          // console.log(data)
          $('#kategori').val(data.kategori);
          $('#modal-edit').find('.modal-body').html(data)
          $('#modal-edit').show();
        },
        error: function(error){
          console.log(error)
        }
      })
   })
  </script> -->
</x-template-layout>