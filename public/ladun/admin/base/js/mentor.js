// route 
var rProsesTambahMentor = server + "admin/main-app/mentor/tambah/proses";
var rGetDataMentor = server + "admin/main-app/mentor/get-data";
// vue object
var appMentor = new Vue({
    el: "#divMentor",
    data: {

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
            document.querySelector("#txtUsernameEdit").value = username;
            axios.post(rGetDataMentor, {'username':username}).then(function(res){
                let obj = res.data;
                document.querySelector("#txtNamaMentorEdit").value = obj.nama_lengkap;
                document.querySelector("#txtHpEdit").value = obj.nomor_handphone;
                document.querySelector("#txtJkEdit").value = obj.jk;
                document.querySelector("#txtEmailEdit").value = obj.email;
            });
            $('#modalEditMentor').modal('show');
        }
    },
});
// inisialisasi 
var isiForm = document.getElementsByClassName("form-control");
var statusForm = true;
$("#tblDataMentor").dataTable();