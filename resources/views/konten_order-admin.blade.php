<!-- Tabel Order Admin -->
<div class="row">
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="text-center">
            <h2>Data Peminjaman</h2>
        </div>
        <div class="float-right">
            <button class="btn btn-primary"><i class="fa fa-plus pr-3"></i>Tambah Peminjaman</button>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Peminjam</th>
                <th>Barang Pinjaman</th>
                <th>Tanggal Pinjam</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($list_peminjaman as $p)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $p->nama_user }}</td>
                    <td>{{ $p->nama_inventaris }}</td>
                    <td>{{ date('d/m/Y', strtotime($p->tanggal_pinjam)) }}</td>
                    <td>{{ $p->keterangan }}</td>
                    <td>
                        @if($p->status == "Dipinjam")
                        <badge class="badge badge-primary">
                        @elseif($p->status == "Diperiksa")
                        <badge class="badge badge-warning">
                        @else
                        <badge class="badge badge-success">
                        @endif
                            {{ $p->status }}                     
                        </badge>
                    </td>
                    <td>
                    @if($p->status == "Diperiksa")
                        <button class="btn btn-primary btn-sm" onclick="modalPeriksaOrder('{{ $p->id_peminjaman }}','{{ $p->nama_inventaris }}','{{ $p->barang_pinjaman }}')"><i class="fa fa-check"></i></button>
                    @endif
                    </td>
                </tr>
                @php $i++; @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- /Tabel Order Admin -->

<!-- Script Buka Modal pada order yang akan dikonfirmasi -->

<script>
    function modalPeriksaOrder(idOrder,namaBarangKonfirm,idBarang){
        $('#modalPeriksaOrder').modal('toggle');
        $('#kolIdKonfirm').val(idOrder);
        $('#namaBarangKonfirm').html(namaBarangKonfirm);
        $('#kolBarangKonfirm').val(idBarang);
    }
</script>

<!-- /Script Buka Modal pada order yang akan dikonfirmasi -->
<!-- Modal Periksa Order -->
<div class="modal fade" id="modalPeriksaOrder" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Pengembalian</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="/home/confirmReturn" method="GET">
                    <h6>Nama Barang</h6>
                    <p id="namaBarangKonfirm"></p>
                    <hr>
                    <input type="hidden" name="kolIdKonfirm" id="kolIdKonfirm" value="">
                    <label>Anda yakin barang sudah dikembalikan oleh peminjam? Pastikan barang sudah ada di bengkel.</label>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" value="Sudah Kembali">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Periksa Order -->