<!-- modal tambah jenis amalan  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambahJenisAmalan">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jenis Amalan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="company">Nama Amalan</label>
                    <input type="text" class="form-control" id="txtNamaAmalan" placeholder="Nama amalan">
                </div>
                <div class="form-group">
                    <label for="company">Keterangan</label>
                    <input type="text" class="form-control" id="txtKeterangan" placeholder="Keterangan jenis amalan">
                </div>
                <div class="form-group">
                    <label for="company">Durasi (Menit)</label>
                    <input type="number" class="form-control" id="txtDurasi" placeholder="Durasi amalan">
                </div>
                <div>
                    <a href="javascript:void(0)" @click="prosesTambahAmalanAtc()" class="btn btn-primary">Proses Tambah Amalan</a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- modal edit jenis amalan  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEditJenisAmalan">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Jenis Amalan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="company">Nama Amalan</label>
                    <input type="text" class="form-control" id="txtNamaAmalanEdit" placeholder="Nama amalan">
                </div>
                <div class="form-group">
                    <label for="company">Keterangan</label>
                    <input type="text" class="form-control" id="txtKeteranganEdit" placeholder="Keterangan jenis amalan">
                </div>
                <div class="form-group">
                    <label for="company">Durasi (Menit)</label>
                    <input type="number" class="form-control" id="txtDurasiEdit" placeholder="Durasi amalan">
                </div>
                <div>
                    <a href="javascript:void(0)" class="btn btn-primary" @click="prosesUpdateAmalan()">Update Jenis Amalan</a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>