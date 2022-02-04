// route 
var rProsesTambahKelompokBinaan = server + "admin/main-app/kelompok-binaan/tambah/proses";
var rProsesHapusKelompokBinaan = server + "admin/main-app/kelompok-binaan/hapus/proses";
// vue object 
var appKelompok = new Vue({
    el : '#divKelompokBinaan',
    data : {

    },
    methods : {
        tambahKelompokBinaanAtc : function()
        {
            $("#modalTambahKelompokBinaan").modal("show");
        },
        prosesTambahKelompokBinaanAtc : function()
        {
            let nama = document.querySelector("#txtNama").value;
            let deks = document.querySelector("#txtDeks").value;
            let mentor = document.querySelector("#txtNamaMentor").value;
            let ds = {'nama':nama, 'deks':deks, 'mentor':mentor}
            axios.post(rProsesTambahKelompokBinaan, ds).then(function(res){
                $("#modalTambahKelompokBinaan").modal("hide");
                pesanUmumApp('success', 'Sukses', 'Sukses menambahkan kelompok binaan ...');
                loadPage('admin/main-app/kelompok-binaan/list', 'Kelompok Binaan');
            });
        },
        detailAtc : function(idKelompok)
        {
            loadPage('admin/main-app/kelompok-binaan/'+idKelompok+'/detail', 'Detail Kelompok Binaan');
        },
        hapusAtc : function(idKelompok)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus kelompok binaan ...?', function (x) {deleteConfirm(idKelompok)});
        }
    }
});
// inisialisasi 
$("#tblDataKelompokBinaan").dataTable();

function deleteConfirm(idKelompok)
{
    axios.post(rProsesHapusKelompokBinaan, {'idKelompok':idKelompok}).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Sukses menghapus kelompok binaan ...');
        loadPage('admin/main-app/kelompok-binaan/list', 'Kelompok Binaan');
    });
}