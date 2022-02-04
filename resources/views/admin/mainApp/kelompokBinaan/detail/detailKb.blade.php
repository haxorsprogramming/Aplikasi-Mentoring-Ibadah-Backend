<div class="row" id="divDetailKbData">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Detail Kelompok Binaan</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Kelompok</label>
                    <h5>{{ $detailKb -> nama_kelompok_binaan }}</h5>
                    <input type="hidden" id="txtIdBinaan" value="{{ $detailKb -> id_kelompok_binaan }}"/>
                </div>
                <div class="form-group">
                    <label>Mentor</label>
                    <h5>{{ $detailKb -> mentorData -> nama_lengkap }}</h5>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row" id="divDetailKbData">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">List Binaan</div>
            <div class="card-body">
                <div style="margin-bottom:20px;">
                    <a href="javascript:void(0)" @click="tambahBinaanAtc()" class="btn btn-primary">Tambah Binaan</a>
                </div>
            </div>
        </div>

    </div>
</div>