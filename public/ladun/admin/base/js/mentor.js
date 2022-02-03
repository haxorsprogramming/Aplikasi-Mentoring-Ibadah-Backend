// route 
var rProsesTambahMentor = server + "admin/main-app/mentor/tambah/proses";
var rGetDataMentor = server + "admin/main-app/mentor/get-data";
var rProsesEditMentor = server + "admin/main-app/mentor/edit/proses";
var rProsesHapusMentor = server + "admin/main-app/binaan/hapus/proses";
// vue object
var appMentor = new Vue({
    el: "#divMentor",
    data: {
        usernameEdit : ''
    },
    methods: {
        tambahMentorAtc: function () {
            $('#modalTambahMentor').modal('show');
        },
        prosesTambahMentor: function () {
            var tForm = document.getElementById("modalTambahMentor").querySelectorAll(".form-control");
            // var tForm = document.getElementsByClassName("form-control");
            for (let i = 0; i < tForm.length; i++) {
                let dForm = tForm[i].value;
                if(dForm === ''){
                    statusForm = false;
                }else{
                    statusForm = true;
                }
            }
            if(statusForm === true){
                let username = document.querySelector("#txtUsername").value;
                let password = document.querySelector("#txtPassword").value;
                let nama = document.querySelector("#txtNamaMentor").value;
                let hp = document.querySelector("#txtHp").value;
                let jk = document.querySelector("#txtJk").value;
                let email = document.querySelector("#txtEmail").value;
                let ds = {'username':username, 'password':password, 'nama':nama, 'hp':hp, 'jk':jk, 'email':email}
                axios.post(rProsesTambahMentor, ds).then(function(res){
                    $('#modalTambahMentor').modal('hide');
                    pesanUmumApp('success', 'Sukses', 'Sukses menambahkan mentor ...');
                    loadPage('admin/main-app/mentor/list');
                });
            }else{
                pesanUmumApp('warning', 'Fill field !!!', 'Harap isi semua field !!!');
            }
        },
        kembaliAtc : function()
        {
            loadPage('admin/main-app/mentor/list');
        },
        editAtc : function(username)
        {
            appMentor.usernameEdit = username;
            document.querySelector("#txtUsernameEdit").value = username;
            axios.post(rGetDataMentor, {'username':username}).then(function(res){
                let obj = res.data;
                document.querySelector("#txtNamaMentorEdit").value = obj.nama_lengkap;
                document.querySelector("#txtHpEdit").value = obj.nomor_handphone;
                document.querySelector("#txtJkEdit").value = obj.jk;
                document.querySelector("#txtEmailEdit").value = obj.email;
            });
            $('#modalEditMentor').modal('show');
        },
        prosesEditMentorAtc : function()
        {
            username = appMentor.usernameEdit;
            let nama = document.querySelector("#txtNamaMentorEdit").value;
            let password = document.querySelector("#txtPasswordEdit").value;
            let hp = document.querySelector("#txtHpEdit").value;
            let jk = document.querySelector("#txtJkEdit").value;
            let email = document.querySelector("#txtEmailEdit").value;
            let ds = {'username':username, 'password':password, 'nama':nama, 'hp':hp, 'jk':jk, 'email':email}
            // console.log(password);
            axios.post(rProsesEditMentor, ds).then(function(res){
                $('#modalEditMentor').modal('hide');
                pesanUmumApp('success', 'Sukses', 'Sukses mengupdate data mentor ...');
                loadPage('admin/main-app/mentor/list');
            });
        },
        hapusAtc : function(username)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus mentor ...?', function (x) {deleteConfirm(username)});
        }
    },
});
// inisialisasi 
var isiForm = document.getElementsByClassName("form-control");
var statusForm = true;
$("#tblDataMentor").dataTable();

function deleteConfirm(username)
{
    axios.post(rProsesHapusMentor, {'username':username}).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Sukses menghapus mentor ...');
        loadPage('admin/main-app/mentor/list');
    });
}