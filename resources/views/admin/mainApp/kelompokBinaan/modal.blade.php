<!-- modal tambah kelompok binaan  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambahKelompokBinaan">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kelompok Binaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="company">Nama Kelompok Binaan</label>
                    <input type="text" class="form-control" id="txtNama" placeholder="Nama kelompok binaan">
                </div>
                <div class="form-group">
                    <label for="company">Deksripsi</label>
                    <input type="password" class="form-control" id="txtDeks" value="-" placeholder="deksripsi">
                </div>
                <div class="form-group">
                    <label for="company">Nama Mentor</label>
                    <select class="form-control" id="txtNamaMentor">
                    @foreach($dataMentor as $mentor)
                        <option value="{{ $mentor -> username }}">{{ $mentor -> profileData -> nama_lengkap }}</option>
                    @endforeach
                    </select>
                </div>
                
                <div>
                    <a href="javascript:void(0)" @click="prosesTambahKelompokBinaanAtc()" class="btn btn-primary">Proses Tambah Kelompok Binaan</a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
