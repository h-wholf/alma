
var interruptor="apagado";
function inicio()
{
    var ocultar=document.getElementById("ocultar");
    ocultar.style.display ="none";
}

function magia()
{
if (interruptor=="encendido")
{
    console.log("apagando")
    interruptor="apagado";
    var ocultar=document.getElementById("ocultar");
    ocultar.style.display ="none";
}else {
    console.log("esta apagado  ensendiendo");
    interruptor="encendido";
    var ocultar=document.getElementById("ocultar");
    ocultar.style.display ="";
}
}
window.onload = inicio;