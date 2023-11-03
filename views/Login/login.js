function init() {
    $('#loginform').on("submit", function (e) {
        Ingresar(e);
    });
}

function Ingresar(e) {
    e.preventDefault();
    var usu_usu  = $('#user_usu').val();
    var usu_pass = $('#user_pass').val();
    console.log(usu_usu);
    console.log(usu_pass);
    $.post("../../controllers/usuariocontrolador.php?op=ingresar",{usuario : usu_usu, clave : usu_pass},function (data) {
        if(data == 0){
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Las credenciales no coinciden',
                showConfirmButton: true,
                //timer:1500
            });

        }else{
            //window.open('http://localhost/productoqr/view/Inicio/','_self');
            window.location.href="../Inicio/index.php";
        }

    });
}

init();