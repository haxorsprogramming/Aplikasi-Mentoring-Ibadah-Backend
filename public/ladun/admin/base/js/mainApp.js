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

function confirmQuest(icon, title, text, x)
{
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    }).then((result) => {
        if (result.value) {
            x();
        }
    });
}