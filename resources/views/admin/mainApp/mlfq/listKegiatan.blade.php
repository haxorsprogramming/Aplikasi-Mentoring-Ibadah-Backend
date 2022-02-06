<div class="row" id="divListKegiatan">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Kegiatan</div>
            <div class="card-body">
                <table id="tblKegiatan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Id Kegiatan</th>
                            <th>Nama Kegiatan</th>
                            <th>Mentor</th>
                            <th>Jumlah Binaan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataKegiatan as $kegiatan)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ substr($kegiatan -> token_kegiatan, 0, 6) }}</td>
                        <td>{{ $kegiatan -> nama_kegiatan }}</td>
                        <td>{{ $kegiatan -> mentorData -> nama_lengkap }}</td>
                        <td>{{ $kegiatan -> totalBinaan($kegiatan -> token_kegiatan) }}</td>
                        <td>{{ $kegiatan -> tanggal_kegiatan }}</td>
                        <td></td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-primary" onclick='analisaMlfqAtc("{{ $kegiatan -> token_kegiatan }}")'>Analisa MLFQ</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>