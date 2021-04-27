<x-template-layout>
    @section('title', 'Dashboard')

    @section('namaHal', 'Dashboard')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">
                        <div class="card mt-4">
                        <div class="card-header">
                            <p class="text-lg pb-2 flex items-center">
                                <i class="fas fa-list mr-3"></i> <b>Data Buku Terbaru</b>
                            </p>
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
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Supplier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $bk) 
                                    <tr>
                                        <td scope="row">{{ $loop->iteration}}</td>
                                        <td>{{ $bk->isbn}}</td>
                                        <td>{{ $bk->judul}}</td>
                                        <td>{{ $bk->penulis}}</td>
                                        <td>{{ $bk->penerbit}}</td>
                                        <td>{{ $bk->kategori->kategori}}</td>
                                        <td>{{ $bk->stok}}</td>
                                        <td>{{ $bk->harga}}</td>
                                        <td>{{ $bk->supplier->nama}}</td>
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
