// route 
var rProsesLogin = server + "admin/auth/login/process";
var rToDashboard = server + "admin/main-app/dashboard";
// inisialisasi 
document.querySelector("#txtUsername").focus();

function prosesLogin()
{
    let username = document.querySelector("#txtUsername").value;
    let password = document.querySelector("#txtPassword").value;

    let ds = {'username':username, 'password':password}
    
    axios.post(rProsesLogin, ds).then(function(res){
        let obj = res.data;
        if(obj.status === "NO_USER"){
            pesanUmumApp('warning', 'No user', 'Tidak ada username terdaftar');
        }else if(obj.status === "WRONG_PASSWORD"){
            pesanUmumApp('warning', 'Wrong password', 'Username / Password salah !!!');
        }else{
            let token = obj.token;
            document.cookie = "ADMIN_TOKEN="+token;
            window.location.assign(rToDashboard);
        }
    });

}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}