//función para validar el password al crear un nuevo usuario
function validapass() {
    var password = document.getElementById('password');
   var repassword = document.getElementById('repassword');
      if (password.value != repassword.value) {
       alert("Error: No coinciden las contraseñas introducidas");
    }
}

function validausername() {
    var password = document.getElementById('password');
   var repassword = document.getElementById('repassword');
      if (password.value != repassword.value) {
       alert("Error: No coinciden las contraseñas introducidas");
    }
}

function validamail() {
    var password = document.getElementById('password');
   var repassword = document.getElementById('repassword');
      if (password.value != repassword.value) {
       alert("Error: No coinciden las contraseñas introducidas");
    }
}

//función para confirmar la baja de un usuario
function confirmar(){
         var txt;
         var r = confirm("¿Quieres darte de baja?");
         if (r == true){
             location.href = "usuarios_baja.proc.php";
         }else{
             //no hará nada
         }
     }