<div class="row" id="divDataKelompokBinaan">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Kelompok Binaan</div>
            <div class="card-body">
                <div style="margin-bottom:20px;">
                    <a href="javascript:void(0)" class="btn btn-primary" @click="tambahKelompokBinaanAtc()">Tambah Kelompok Binaan</a>
                </div>
                <table id="tblDataKelompokBinaan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Id Kelompok</th>
                            <th>Nama Kelompok</th>
                            <th>Mentor</th>
                            <th>Jumlah Anggota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataKelompokBinaan as $kb)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ substr($kb -> id_kelompok_binaan, 0, 6) }}</td>
                            <td><strong>{{ $kb -> nama_kelompok_binaan }}</strong></td>
                            <td>{{ $kb -> mentorData -> nama_lengkap}}</td>
                            <td>{{ $kb -> totalAnggota($kb -> id_kelompok_binaan) }}</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-primary" @click="detailAtc('{{ $kb -> id_kelompok_binaan }}')">Detail</a>&nbsp;&nbsp;
                                <a href="javascript:void(0)" class="btn btn-warning" @click="hapusAtc('{{ $kb -> id_kelompok_binaan }}')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>