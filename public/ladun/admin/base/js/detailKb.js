// route 
var rProcessTambahAnggotaBinaan = server + "admin/main-app/kelompok-binaan/tambah-anggota/prosess";
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
        }
    }
});