<div class="row" id="divTambahMentor" style="display: none;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Tambah Mentor Baru</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="company">Username</label>
                    <input type="text" class="form-control" id="txtUsername">
                </div>
                <div class="form-group">
                    <label for="company">Password</label>
                    <input type="text" class="form-control" id="txtPassword">
                </div>
                <div class="form-group">
                    <label for="company">Nama Mentor</label>
                    <input type="text" class="form-control" id="txtNamaMentor">
                </div>
                <div class="form-group">
                    <label for="company">Nomor Handphone</label>
                    <input type="text" class="form-control" id="txtHp">
                </div>
                <div class="form-group">
                    <label for="company">Jenis Kelamin</label>
                    <select class="form-control" id="txtJk">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="company">Email</label>
                    <input type="text" class="form-control" id="txtEmail">
                </div>
                <div>
                    <a href="javascript:void(0)" @click="prosesTambahMentor()" class="btn btn-primary">Proses</a>&nbsp;&nbsp;
                    <a href="javascript:void(0)" @click="kembaliAtc()" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>