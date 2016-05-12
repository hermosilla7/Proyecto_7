function cambiarValorEdadMin(valor){
	document.getElementById("edadMin").innerHTML = valor;
}
function cambiarValorEdadMax(valor){
	document.getElementById("edadMax").innerHTML = valor;
}
function cambiarValorProx(valor){
	document.getElementById("prox").innerHTML = valor + "km";
}
function validarEdadMin(valor){
	if(document.getElementById("eMax").value<valor){
		document.getElementById("eMin").value=document.getElementById("eMax").value;
		document.getElementById("edadMin").innerHTML=document.getElementById("edadMax").innerHTML;
	}
}
function validarEdadMax(valor){
	if(document.getElementById("eMin").value>valor){
		document.getElementById("eMax").value=document.getElementById("eMin").value;
		document.getElementById("edadMax").innerHTML=document.getElementById("edadMin").innerHTML;
	}
}