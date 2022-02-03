// route 
var rProsesTambahBinaan = server + "admin/main-app/binaan/tambah/proses";
// vue object 
var appBinaan = new Vue({
    el : '#divBinaan',
    data : {

    },
    methods : {
        tambahBinaanAtc : function()
        {
            $('#modalTambahBinaan').modal('show');
        },
        prosesTambahBinaan : function()
        {
            let listForm = ['txtUsername', 'txtPassword', 'txtNamaMentor', 'txtHp', 'txtEmail'];
            let check = checkForm(listForm);
            if(check === false){
                pesanUmumApp('warning', 'Fill field !!!', 'Harap isi semua field !!!');
                return false;
            }
            let username = document.querySelector("#txtUsername").value;
            let password = document.querySelector("#txtPassword").value;
            let nama = document.querySelector("#txtNamaMentor").value;
            let hp = document.querySelector("#txtHp").value;
            let jk = document.querySelector("#txtJk").value;
            let email = document.querySelector("#txtEmail").value;
            let ds = {'username':username, 'password':password, 'nama':nama, 'hp':hp, 'jk':jk, 'email':email}
            axios.post(rProsesTambahBinaan, ds).then(function(res){
            $("#modalTambahBinaan").modal("hide");
                pesanUmumApp('success', 'Sukses', 'Sukses menambahkan binaan ...');
                loadPage('admin/main-app/binaan/list', 'Binaan');
            });
        },
        editAtc : function(username)
        {
            $('#modalEditBinaan').modal('show');
            
        },
        hapusAtc : function(username)
        {

        }
    }
});
// inisialisasi 
var statusFormBinaan = true;
$("#tblDataBinaan").dataTable();

