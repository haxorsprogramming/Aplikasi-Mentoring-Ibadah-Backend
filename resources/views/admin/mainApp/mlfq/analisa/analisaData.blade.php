<div class="row" id="divListKegiatan">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Analisa MLFQ</div>
            <div class="card-body">
                <table id="tblKegiatan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No Antrian</th>
                            <th>Id Peserta</th>
                            <th>Nama Binaan</th>
                            <th>Jenis Amalan</th>
                            <th>Burst Time</th>
                            <th>Waktu Daftar</th>
                            <th>Waktu Selesai</th>
                            <th>Status</th>             
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataPeserta as $peserta)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ substr($peserta -> token_antrian, 0, 6) }}</td>
                        <td>{{ $peserta -> binaanData($peserta -> id_binaan) -> nama_lengkap }}</td>
                        <td>{{ $peserta -> jenisAmalan($peserta -> id_jenis_amalan) -> nama_amalan }}</td>
                        <td>{{ $peserta -> jenisAmalan($peserta -> id_jenis_amalan) -> durasi }} menit</td>
                        <td>{{ $peserta -> waktu_daftar }}</td>
                        <td>{{ $peserta -> waktu_selesai }}</td>
                        <td>{{ $peserta -> status_setoran }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<div class="row" id="divListKegiatan">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Penjumlahan Burst Time Amalan</div>
            <div class="card-body">
                <table id="tblKegiatan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>Kode</th>
                            <th>Jenis Amalan</th>
                            <th>Total Burst Time</th>        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jenisAmalan as $amalan)
                    <tr>
                        <td>P{{ $loop -> iteration }}</td>
                        <td>{{ $amalan -> nama_amalan }}</td>
                        <td>{{ $amalan -> getTotalBurstTime($idKegiatan, $amalan -> kd_amalan, $amalan -> durasi) }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<!-- <div class="row" id="divListKegiatan">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Running Process</div>
            <div class="card-body">
                <table id="tblKegiatan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>        
                        </tr>
                    </thead>
                    <tbody>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div> -->

<div class="row" id="divListKegiatan">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Hasil akhir antrian menurut analisa MLFQ</div>
            <div class="card-body">
                <table id="tblKegiatan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Binaan</th>
                            <th>No Antrian Awal</th>
                            <th>No Antrian Hasil MLFQ</th>
                            <th>Jenis Amalan</th>        
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp


                    @php
                    // output sholat subuh 
                    $kdSubuh = "15ddf9d2-294b-400d-9eed-6737d5af46e8";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Sholat Subuh</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output sholat zuhur 
                    $kdSubuh = "d1bca0cd-7302-4922-b7a4-0eeab17d9087";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Sholat Dhzuhur</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output membaca al qur'an 
                    $kdSubuh = "a59c02c1-7fb2-4505-9975-ff1086b9743e";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Membaca Al-Qur'an</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output Almasurat 
                    $kdSubuh = "05b98329-1f21-4920-ad80-3f035f20a830";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Almasurat</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output dhuha
                    $kdSubuh = "cba8a67e-d818-45ce-8965-59302bb37cdb";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Sholat Isya</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output isya
                    $kdSubuh = "02c05b52-bfd3-4946-81ba-857a81c203f6";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Sholat Dhuha</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>