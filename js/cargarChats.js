var otroU, mensaje;

$(document).ready(function(){

	$("#submitmsg").click(function(){
        mensaje = document.getElementById("usermsg").value;
        if(mensaje != ""){
        	insertarMensaje(mensaje, otroU);
        	cargarMensajes(otroU);
        	document.getElementById("usermsg").value="";
        }
    });

	cargarChats();
	setInterval(cargarChats,3000);

	setInterval(comprobarDiv,3000);

});

function comprobarDiv(){
	if(document.getElementById("chatInd")){
		cargarMensajes(otroU);
	}
}

function cargarChats(){
    $.ajax({
        type: "POST",
        url: "cargarChats.php",
        dataType: "json",
        error: function(data){
            alert("error ajax");
        },
        success: function(data){
            $("#chats").empty();
            $.each(data, function (name, value){
                $("#chats").append("<div id='chatIndividual' onclick='cargarMensajes("+value.id+")'>"+value.nombre+" "+value.apellidos+"</div><br/>");
            });
        }
    })
}

function cargarMensajes(otroUser){
	otroU = otroUser;
    $.ajax({
        type: "POST",
        url: "cargarMensajes.php",
        data: "otroUser="+otroUser,
        dataType: "json",
        error: function(){
            alert("Error petición ajax2");
        },
        success: function(data){
            $("#chatbox").empty();
            $.each(data, function (name, value){
                $("#chatbox").append("<span id='chatInd'>"+value.mensaje+" ("+value.fecha+") </span><br/>");
            });
        }
    })
}

function insertarMensaje(mensaje, otroUser){
    $.ajax({
        type: "POST",
        url: "insertarMensaje.php",
        data: "mensaje="+mensaje+"&otroUser="+otroUser,
    })
};