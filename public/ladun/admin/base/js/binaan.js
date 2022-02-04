// route
var rProsesTambahBinaan = server + "admin/main-app/binaan/tambah/proses";
var rGetDataBinaan = server + "admin/main-app/binaan/get-data";
var rProsesUpdateBinaan = server + "admin/main-app/binaan/hapus/proses";
// vue object
var appBinaan = new Vue({
    el: "#divBinaan",
    data: {
        usernameEdit : ''
    },
    methods: {
        tambahBinaanAtc: function () 
        {
            $("#modalTambahBinaan").modal("show");
        },
        prosesTambahBinaan: function () 
        {
            prosesTambahBinaan();
        },
        editAtc: function (username) 
        {
            document.querySelector("#txtUsernameEdit").value = username;
            appBinaan.usernameEdit = username;
            $("#modalEditBinaan").modal("show");
            axios.post(rGetDataBinaan, {'username':username}).then(function(res){
                let obj = res.data;
                document.querySelector("#txtNamaBinaanEdit").value  = obj.nama_lengkap;
                document.querySelector("#txtHpEdit").value = obj.nomor_handphone;
                document.querySelector("#txtJkEdit").value = obj.jk;
                document.querySelector("#txtEmailEdit").value = obj.email;
            });
        },
        hapusAtc: function (username) 
        {

        },
        prosesEditBinaan : function()
        {
            let listForm = ["txtNamaBinaanEdit", "txtHpEdit", "txtEmailEdit"];
            let check = checkForm(listForm);
            if (check === false) {
                pesanUmumApp("warning", "Fill field !!!", "Harap isi semua field !!!");
                return false;
            }
            let password = document.querySelector("#txtPasswordEdit").value;
            let nama = document.querySelector("#txtNamaBinaanEdit").value;
            let hp = document.querySelector("#txtHpEdit").value;
            let email = document.querySelector("#txtEmailEdit").value;
            let jk = document.querySelector("#txtJkEdit").value;
            let ds = {'username':appBinaan.usernameEdit, 'password':password, 'nama':nama, 'hp':hp, 'email':email, 'jk':jk}
            axios.post(rProsesUpdateBinaan, ds).then(function(res){
                $("#modalEditBinaan").modal("hide");
                pesanUmumApp("success", "Sukses", "Sukses update data binaan ...");
                loadPage("admin/main-app/binaan/list", "Binaan");
            });
        }
    },
});
// inisialisasi
var statusFormBinaan = true;
$("#tblDataBinaan").dataTable();

function prosesTambahBinaan() {
    let listForm = ["txtUsername", "txtPassword", "txtNamaBinaan", "txtHp", "txtEmail"];
    let check = checkForm(listForm);
    if (check === false) {
        pesanUmumApp("warning", "Fill field !!!", "Harap isi semua field !!!");
        return false;
    }
    let username = document.querySelector("#txtUsername").value;
    let password = document.querySelector("#txtPassword").value;
    let nama = document.querySelector("#txtNamaBinaan").value;
    let hp = document.querySelector("#txtHp").value;
    let jk = document.querySelector("#txtJk").value;
    let email = document.querySelector("#txtEmail").value;
    let ds = { username:username, password:password, nama:nama, hp:hp, jk:jk, email:email };
    axios.post(rProsesTambahBinaan, ds).then(function (res) {
        $("#modalTambahBinaan").modal("hide");
        pesanUmumApp("success", "Sukses", "Sukses menambahkan binaan ...");
        loadPage("admin/main-app/binaan/list", "Binaan");
    });
}
