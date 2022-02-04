<div class="row" id="divDataMentor">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Jenis Amalan</div>
            <div class="card-body">
                <div style="margin-bottom:20px;">
                    <a href="javascript:void(0)" class="btn btn-primary" @click="tambahJenisAmalanAtc()">Tambah Jenis Amalan</a>
                </div>
                <table id="tblJenisAmalan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Kode Amalan</th>
                            <th>Nama</th>
                            <th>Waktu (Menit)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jenisAmalan as $ja)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ substr($ja -> kd_amalan, 0, 6) }}</td>
                        <td>{{ $ja -> nama_amalan }}</td>
                        <td>{{ $ja -> durasi }}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-primary" @click="editAtc('{{ $ja -> kd_amalan }}')">Edit</a>&nbsp;&nbsp;
                            <a href="javascript:void(0)" class="btn btn-warning" @click="hapusAtc('{{ $ja -> kd_amalan }}')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>