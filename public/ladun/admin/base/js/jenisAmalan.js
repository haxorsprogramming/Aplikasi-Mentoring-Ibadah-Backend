var rProsesTambahAmalan = server + "admin/main-app/jenis-amalan/tambah/proses";
var rGetDataAmalan = server + "admin/main-app/jenis-amalan/data/get";
var rProsesUpdateAmalan = server + "admin/main-app/jenis-amalan/update/proses";
var rProsesHapusAmalan = server + "admin/main-app/jenis-amalan/hapus/proses";
// vue object 
var appAmalan = new Vue({
    el : '#divJenisAmalan',
    data : {
        kdAmalanEdit : ''
    },
    methods : {
        tambahJenisAmalanAtc : function()
        {
            $("#modalTambahJenisAmalan").modal("show");
        },
        prosesTambahAmalanAtc : function()
        {
            let listForm = ["txtNamaAmalan", "txtDurasi"];
            let check = checkForm(listForm);
            if (check === false) {
                pesanUmumApp("warning", "Fill field !!!", "Harap isi semua field !!!");
                return false;
            }
            let nama = document.querySelector("#txtNamaAmalan").value;
            let deks = document.querySelector("#txtKeterangan").value;
            let durasi = document.querySelector("#txtDurasi").value;
            let ds = {'nama':nama, 'deks':deks, 'durasi':durasi}
            axios.post(rProsesTambahAmalan, ds).then(function(res){
                $("#modalTambahJenisAmalan").modal("hide");
                pesanUmumApp("success", "Sukses", "Sukses menambahkan amalan ...");
                loadPage("admin/main-app/jenis-amalan/list", "Jenis Amalan");
            });
        },
        editAtc : function(kdAmalan)
        {
            appAmalan.kdAmalanEdit = kdAmalan;
            $("#modalEditJenisAmalan").modal("show");
            axios.post(rGetDataAmalan, {'kdAmalan':kdAmalan}).then(function(res){
                let obj = res.data;
                document.querySelector("#txtNamaAmalanEdit").value = obj.nama_amalan;
                document.querySelector("#txtKeteranganEdit").value = obj.keterangan;
                document.querySelector("#txtDurasiEdit").value = obj.durasi;
            });
        },
        prosesUpdateAmalan : function()
        {
            let listForm = ["txtNamaAmalanEdit", "txtDurasiEdit"];
            let check = checkForm(listForm);
            if (check === false) {
                pesanUmumApp("warning", "Fill field !!!", "Harap isi semua field !!!");
                return false;
            }
            let nama = document.querySelector("#txtNamaAmalanEdit").value;
            let deks = document.querySelector("#txtKeteranganEdit").value;
            let durasi = document.querySelector("#txtDurasiEdit").value;
            let ds = {'nama':nama, 'deks':deks, 'durasi':durasi, 'kdAmalan':appAmalan.kdAmalanEdit}
            axios.post(rProsesUpdateAmalan, ds).then(function(res){
                $("#modalEditJenisAmalan").modal("hide");
                pesanUmumApp("success", "Sukses", "Sukses mengupdate amalan ...");
                loadPage("admin/main-app/jenis-amalan/list", "Jenis Amalan");
            });
        },
        hapusAtc : function(kdAmalan)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus jenis amalan ...?', function (x) {deleteConfirm(kdAmalan)});
        }
    }
});
// inisialisasi 
$("#tblJenisAmalan").dataTable();

function deleteConfirm(kdAmalan)
{
    axios.post(rProsesHapusAmalan, {'kdAmalan':kdAmalan}).then(function(res){
        pesanUmumApp("success", "Sukses", "Sukses menghapus amalan ...");
        loadPage("admin/main-app/jenis-amalan/list", "Jenis Amalan");
    });
}