<!-- modal tambah anggota binaan  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambahAnggotaBinaan">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih binaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Binaan</th>
                            <th>Nomor Handphone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataBinaan as $binaan)
                    @php
                        $tRecord = $binaan -> cekBinaanKelompok($detailKb -> id_kelompok_binaan, $binaan -> username)
                    @endphp
                    @if($tRecord == 1)
                        <tr style="background-color: #81ecec;">
                    @else
                        <tr>
                    @endif
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $binaan -> profileData -> nama_lengkap }}</td>
                            <td>{{ $binaan -> profileData -> nomor_handphone }}</td>
                            <td>
                            @if($tRecord == 1)
                                Sudah ditambahkan
                            @else
                                <a href="javascript:void(0)" class="btn btn-primary" @click="tambahBinaanProcessAtc('{{ $binaan -> username }}')">Tambah</a>
                            @endif  
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
