<div class="row" id="divDataMentor">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Binaan</div>
            <div class="card-body">
                <div style="margin-bottom:20px;">
                    <a href="javascript:void(0)" class="btn btn-primary" @click="tambahBinaanAtc()">Tambah Binaan</a>
                </div>
                <table id="tblDataBinaan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Hp / Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataBinaan as $binaan)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $binaan -> profileData -> nama_lengkap }}</td>
                        <td>{{ $binaan -> profileData -> nomor_handphone }} / {{ $binaan -> profileData -> email }}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-primary" @click="editAtc('{{ $binaan -> username }}')">Edit</a>&nbsp;&nbsp;
                            <a href="javascript:void(0)" class="btn btn-warning" @click="hapusAtc('{{ $binaan -> username }}')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>