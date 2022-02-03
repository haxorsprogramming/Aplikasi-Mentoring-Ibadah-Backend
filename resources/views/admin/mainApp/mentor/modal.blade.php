<!-- modal tambah mentor  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambahMentor">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah mentor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="company">Username</label>
                    <input type="text" class="form-control" id="txtUsername">
                </div>
                <div class="form-group">
                    <label for="company">Password</label>
                    <input type="password" class="form-control" id="txtPassword">
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
                    <a href="javascript:void(0)" @click="prosesTambahMentor()" class="btn btn-primary">Proses Tambah Mentor</a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<!-- modal edit mentor  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEditMentor">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit mentor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="company">Username</label>
                    <input type="text" class="form-control" id="txtUsernameEdit" disabled>
                </div>
                <div class="form-group">
                    <label for="company">Password</label>&nbsp;&nbsp;<small>(Kosongkan apabila tidak ada pergantian password)</small>
                    <input type="password" class="form-control" id="txtPasswordEdit">
                </div>
                <div class="form-group">
                    <label for="company">Nama Mentor</label>
                    <input type="text" class="form-control" id="txtNamaMentorEdit">
                </div>
                <div class="form-group">
                    <label for="company">Nomor Handphone</label>
                    <input type="text" class="form-control" id="txtHpEdit">
                </div>
                <div class="form-group">
                    <label for="company">Jenis Kelamin</label>
                    <select class="form-control" id="txtJkEdit">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="company">Email</label>
                    <input type="text" class="form-control" id="txtEmailEdit">
                </div>
                <div>
                    <a href="javascript:void(0)" class="btn btn-primary">Proses Edit Mentor</a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>