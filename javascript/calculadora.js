//document.getElementById("bebidas-alcoolicas").style.display = "none";


document.getElementById('Bebida1').onclick = function() {
    var checkbox = document.getElementById('Bebida1');
    if (checkbox.checked) {
        document.getElementById("bebidas-alcoolicas").style.display = "inline-block";
    } else {
        document.getElementById("bebidas-alcoolicas").style.display = "none";
    }
}

document.getElementById('Bebida2').onclick = function() {
    var checkbox = document.getElementById('Bebida2');
    if (checkbox.checked) {
        document.getElementById("bebidas-nao-alcoolicas").style.display = "inline-block";
    } else {
        document.getElementById("bebidas-nao-alcoolicas").style.display = "none";
    }
}

document.getElementById('Bebida3').onclick = function() {
    var checkbox = document.getElementById('Bebida3');
    if (checkbox.checked) {
        document.getElementById("bebidas-destiladas").style.display = "inline-block";
    } else {
        document.getElementById("bebidas-destiladas").style.display = "none";
    }
}

function SelecionarBebida(tipo_bebida) {
    // alert(tipo_bebida);
    var checkbox = document.getElementById('checkbox-' + tipo_bebida);
    if (checkbox.checked) {
        document.getElementById("row-" + tipo_bebida).style.display = "table-row";
    } else {
        document.getElementById("row-" + tipo_bebida).style.display = "none";
    }
}