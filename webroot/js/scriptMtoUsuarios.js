function obtenerDatosUsuarioPorDesc(descripcionUsuario){
    $.ajax({
        type: 'post',
        url: '/AplicacionFinalDWESCristina2021/api/servicioConsultarDescUsuario.php',
        data: {
            descUsuario: descripcionUsuario
        },
        success: function (respuesta) {
            console.log(respuesta.resultado);
            var resultado = respuesta.resultado;
            if(resultado!=null){
                var tabla = "";
                for (let i = 0; i < resultado.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td>" + resultado[i].codUsuario + "</td>";
                    tabla += "<td>" + resultado[i].descUsuario + "</td>";
                    tabla += "<td>" + resultado[i].numConexiones + "</td>";
                    if (resultado[i].fechaHoraUltimaConexion) {
                        tabla += "<td>" + resultado[i].fechaHoraUltimaConexion + "</td>";
                    } else {
                        tabla += "<td> null </td>";
                    }
                    tabla += "<td><button class=\"eliminar\" onclick=\"eliminarUsuario('" + resultado[i].codUsuario + "')\">eliminar</button><button class=\"restablecerPassword\" onclick=\"restablecerPassword('" + resultado[i].codUsuario + "')\">Restablecer Password</button></td>";
                    tabla += "</tr>";
                }

                var table = document.getElementById('tabla');
                table.innerHTML = tabla;
            }else{
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'warning',
                    title: 'La descripcion introducida no se encuentra con ningun usuario'
                })
            }
        },
        error: function (respuesta) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No se ha podido obtener la información'
            })
        }
    });
}

function eliminarUsuario(codigoUsuario) {
    Swal.fire({
        title: '¿Estás seguro de eliminar este usuario?',
        text: "Eliminaras este usuario de forma permanente!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar Usuario',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'post',
                url: '/AplicacionFinalDWESCristina2021/api/servicioEliminarUsuario.php',
                data: {
                    key: "dcb29f5a90e05bf17e238bc4fe0d51b73827a7d2b28e1b3ddaf3fe0aa5e8bca8",
                    codUsuario: codigoUsuario
                },
                success: function (respuesta) {
                    if (respuesta['error'] == null) {
                        obtenerDatosUsuarioPorDesc("");
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: respuesta['error']
                        })
                    }

                },
                error: function (respuesta) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No se ha podido obtener la información'
                    })
                }
            });
            Swal.fire(
                'Usuario Eliminado!',
                'El usuario seleccionado ha sido eliminado de la base de datos',
                'success'
            )
        }
    })
}

function restablecerPassword(codigoUsuario) {
    Swal.fire({
        title: '¿Estás seguro de de restablecer la contraseña del usuario?',
        text: "Restableceras la contraseña del usuario seleccionado",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'RestablecerPassword',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'post',
                url: '/AplicacionFinalDWESCristina2021/api/servicioRestablecerPassword.php',
                data: {
                    key: "dcb29f5a90e05bf17e238bc4fe0d51b73827a7d2b28e1b3ddaf3fe0aa5e8bca8",
                    codUsuario: codigoUsuario
                },
                success: function (respuesta) {
                    if (respuesta['error'] == null) {
                        obtenerDatosUsuarioPorDesc("");
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: respuesta['error']
                        })
                    }

                },
                error: function (respuesta) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No se ha podido obtener la información'
                    })
                }
            });
            Swal.fire(
                'Password restablecida!',
                'La contraseña ha sido restablecida con exito',
                'success'
            )
        }
    })
}

window.onload = () => {
    obtenerDatosUsuarioPorDesc("");
    var busqueda = document.getElementById('Usuario');
    busqueda.onkeyup = () =>{
        obtenerDatosUsuarioPorDesc(busqueda.value);
    } 
}