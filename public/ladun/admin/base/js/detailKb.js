// route 
var rProcessTambahAnggotaBinaan = server + "admin/main-app/kelompok-binaan/tambah-anggota/proses";
var rProcessHapusAnggotaBinaan = server + "admin/main-app/kelompok-binaan/hapus-anggota/proses";
// vue object 
var appDetailKb = new Vue({
    el : '#divDetailKb',
    data : {

    },
    methods : {
        tambahBinaanAtc : function()
        {
            $("#modalTambahAnggotaBinaan").modal("show");
        },
        tambahBinaanProcessAtc : function(username)
        {
            let idKelompokBinaan = document.querySelector("#txtIdBinaan").value;
            let ds = {'idKelompok':idKelompokBinaan, 'username':username}
            axios.post(rProcessTambahAnggotaBinaan, ds).then(function(res){
                $("#modalTambahAnggotaBinaan").modal("hide");
                pesanUmumApp('success', 'Sukses', 'Sukses menambahkan anggota kelompok binaan ...');
                loadPage('admin/main-app/kelompok-binaan/'+idKelompokBinaan+'/detail', 'Detail Kelompok Binaan');
            });  
        },
        hapusAnggotaBinaanAtc : function(token)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus binaan dari kelompok binaan ...?', function (x) {deleteConfirm(token)});
        }
    }
});

// inisialisasi 
$("#tblListBinaan").dataTable();

function deleteConfirm(token)
{
    let idKelompokBinaan = document.querySelector("#txtIdBinaan").value;
    axios.post(rProcessHapusAnggotaBinaan, {'token':token}).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Sukses menghapus anggota kelompok dari binaan ...');
        loadPage('admin/main-app/kelompok-binaan/'+idKelompokBinaan+'/detail', 'Detail Kelompok Binaan');
    });
}