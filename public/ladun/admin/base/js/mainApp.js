// vue object 
var app = new Vue({
    el : '#divApp',
    data : {

    },
    methods : {
        menuAtc : function(path)
        {
            loadPage(path);
        }
    }
});

loadPage('admin/main-app/beranda');

function loadPage(path)
{
    let rPage = server + path;
    $("#divUtama").load(rPage);
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}