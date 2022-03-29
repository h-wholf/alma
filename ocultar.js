var interruptor=1
function mostrar_ocultar(id)
{
    
    var n=document.getElementById(id);
    if (interruptor==1)
    {
        n.style.display ="block";
        interruptor++
    } else {
        n.style.display = "none";
        interruptor=1
    
    }
}


function enlase(link,texto)
{
	document.write('<a class="link" href="' + link + '">' + texto);
}
