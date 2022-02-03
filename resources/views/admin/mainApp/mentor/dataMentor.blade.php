<div class="row" id="divDataMentor">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Mentor</div>
            <div class="card-body">
                <div style="margin-bottom:20px;">
                    <a href="javascript:void(0)" @click="tambahMentorAtc()" class="btn btn-primary">Tambah Mentor</a>
                </div>
                <table id="tblDataMentor" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Hp / Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataMentor as $mentor)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $mentor -> profileData -> nama_lengkap }}</td>
                        <td>{{ $mentor -> profileData -> nomor_handphone }} / {{ $mentor -> profileData -> email }}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-primary">Edit</a>&nbsp;&nbsp;
                            <a href="javascript:void(0)" class="btn btn-warning">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>