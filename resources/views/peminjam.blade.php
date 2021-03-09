<!DOCTYPE html>
@php $halaman='peminjam'; @endphp
<html lang="en">
<head>
    @include('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BengRPL - Data Peminjam</title>
</head>
<body>
    <div class="wrapper">
        @include('sidebar')
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Judul Halaman -->
                    <div class="col-md-12" style="margin-bottom: 20px;">
                        <div class="text-center">
                            <h2>Data Peminjam</h2>
                        </div>
                        <div class="float-right">
                            <button class="btn btn-primary">Tambah User</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Tabel Data Peminjam -->
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Nomor User</th>
                                <th>Nama User</th>
                                <th>Jenis User</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php  
                                $i = 1;
                                @endphp
                                @foreach($list_peminjam as $l)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $l->nomor_user }}</td>
                                    <td>{{ $l->nama_user }}</td>
                                    <td>{{ $l->jenis_user }}</td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
                                @php $i++; @endphp
                                @endforeach()
                            </tbody>
                        </table>
                        <!-- Modal Tambah -->
                        <div class="modal fade" id="modalTambahPeminjam" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Edit -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>