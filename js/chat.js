var mensaje;

$(document).ready(function(){
    $("#submitmsg").click(function(){
        mensaje = document.getElementById("usermsg").value;
        insertarMensaje(mensaje);
        cargarMensajes();
    });
    cargarMensajes();
    setInterval(cargarMensajes,3000);
});

function insertarMensaje(mensaje){
    $.ajax({
        type: "POST",
        url: "../insertarMensaje.php",
        data: "mensaje="+mensaje
    })
};

function cargarMensajes(){
    $.ajax({
        type: "POST",
        url: "../cargarMensajes.php",
        dataType: "json",
        error: function(){
            alert("Error petición ajax2");
        },
        success: function(data){
            $("#chatbox").empty();
            $.each(data, function (name, value){
                $("#chatbox").append(value.mensaje+" ("+value.fecha+") <br/>");
            });
        }
    })
}
