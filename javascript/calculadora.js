//document.getElementById("bebidas-alcoolicas").style.display = "none";



calcularBebidas();

document.getElementById('input_qtd_adultos').onchange = function() {
    calcularBebidas();
}

function calcularBebidas() {
    spansQtd = document.getElementsByClassName("span-qtd-bebida");

    Array.prototype.forEach.call(spansQtd, function(item) {
        var idQtdBebida = item.id;
        idQtdBebida = idQtdBebida.replace("span-qtd-bebida-", "qtd-");

        var qtdBebida = document.getElementById(idQtdBebida).value;
        var qtdAdultos = document.getElementById('input_qtd_adultos').value;

        //caso seja energético
        if (item.id.replace("span-qtd-bebida-", "") == "energetico") {
            var qtdEnergetico = Math.ceil(eval(qtdAdultos) / eval(qtdBebida));
            var qtdEnergeticoVodka = 0;
            var qtdEnergeticoGim = 0;

            //5 energéticos para cada vodka
            if (document.getElementById('row-vodka').style.display != 'none') {
                var qtdVodka = document.getElementById('qtd-vodka').value;
                qtdEnergeticoVodka = Math.ceil(eval(qtdAdultos) / eval(qtdVodka))
            }

            //5 energéticos para cada gim
            if (document.getElementById('row-gim').style.display != 'none') {
                var qtdGim = document.getElementById('qtd-gim').value;
                qtdEnergeticoGim = Math.ceil(eval(qtdAdultos) / eval(qtdGim))
            }

            qtdEnergetico += qtdEnergeticoGim * 5;
            qtdEnergetico += qtdEnergeticoVodka * 5;

            item.innerHTML = " x " + qtdEnergetico;
        } else {
            var qtdBebidaTotal = Math.ceil(eval(qtdAdultos) / eval(qtdBebida));
            item.innerHTML = " x " + qtdBebidaTotal;
        }
    });
}

document.getElementById('Bebida1').onclick = function() {
    var checkbox = document.getElementById('Bebida1');
    if (checkbox.checked) {
        document.getElementById("bebidas-alcoolicas").style.display = "inline-block";
    } else {
        document.getElementById("bebidas-alcoolicas").style.display = "none";
    }
    calcularBebidas();
}

document.getElementById('Bebida2').onclick = function() {
    var checkbox = document.getElementById('Bebida2');
    if (checkbox.checked) {
        document.getElementById("bebidas-nao-alcoolicas").style.display = "inline-block";
    } else {
        document.getElementById("bebidas-nao-alcoolicas").style.display = "none";
    }
    calcularBebidas();
}

document.getElementById('Bebida3').onclick = function() {
    var checkbox = document.getElementById('Bebida3');
    if (checkbox.checked) {
        document.getElementById("bebidas-destiladas").style.display = "inline-block";
    } else {
        document.getElementById("bebidas-destiladas").style.display = "none";
    }
    calcularBebidas();
}

function SelecionarBebida(tipo_bebida) {
    // alert(tipo_bebida);
    var checkbox = document.getElementById('checkbox-' + tipo_bebida);
    if (checkbox.checked) {
        document.getElementById("row-" + tipo_bebida).style.display = "table-row";
    } else {
        document.getElementById("row-" + tipo_bebida).style.display = "none";
    }
    calcularBebidas();
}