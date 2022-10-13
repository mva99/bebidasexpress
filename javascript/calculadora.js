//document.getElementById("bebidas-alcoolicas").style.display = "none";
// document.getElementsByClassName('btn-calculadora').onclick = function() {
    
// }

const botaoCalculadora = document.querySelector('.btn-calculadora')
botaoCalculadora.onclick = (e) => {
    //https://thewebdev.info/2022/02/07/how-to-prevent-reload-with-link-onclick-without/
    e.preventDefault()
    exibirOcultarCalculadora();
}

function exibirOcultarCalculadora() {
    var exibido = document.getElementById('secao-calculadora').style.display;
    if (exibido == 'none') {
        document.getElementById('secao-calculadora').style.display = "inherit";
    } else {
        document.getElementById('secao-calculadora').style.display = "none";
    }
}

calcularBebidas();

document.getElementById('input_qtd_adultos').onchange = function() {calcularBebidas();}
document.getElementById('input_qtd_criancas').onchange = function() {calcularBebidas();}

function calcularBebidas() {
    spansQtd = document.getElementsByClassName("span-qtd-bebida");

    //reseta a escolha dos tipos de bebidas que forem escondidas
    if (document.getElementById("escolha-bebida-alcoolica").style.display == "none") {
        document.getElementById('resultado-cerveja').style.display = 'none';
        document.getElementById('resultado-vinho').style.display = 'none';

        document.getElementById('checkbox-cerveja').checked = false;
        document.getElementById('checkbox-vinho').checked = false;
    }

    if (document.getElementById("escolha-bebida-nao-alcoolica").style.display == "none") {
        document.getElementById('resultado-agua').style.display = 'none';
        document.getElementById('resultado-refrigerante').style.display = 'none';
        document.getElementById('resultado-suco').style.display = 'none';
        document.getElementById('resultado-cha').style.display = 'none';
        document.getElementById('resultado-energetico').style.display = 'none';
        document.getElementById('resultado-tonico').style.display = 'none';

        document.getElementById('checkbox-agua').checked = false;
        document.getElementById('checkbox-refrigerante').checked = false;
        document.getElementById('checkbox-suco').checked = false;
        document.getElementById('checkbox-cha').checked = false;
        document.getElementById('checkbox-energetico').checked = false;
        document.getElementById('checkbox-tonico').checked = false;
    }

    if (document.getElementById("escolha-bebida-destilada").style.display == "none") {
        document.getElementById('resultado-whisky').style.display = 'none';
        document.getElementById('resultado-vodka').style.display = 'none';
        document.getElementById('resultado-sake').style.display = 'none';
        document.getElementById('resultado-gin').style.display = 'none';

        document.getElementById('checkbox-whisky').checked = false;
        document.getElementById('checkbox-vodka').checked = false;
        document.getElementById('checkbox-sake').checked = false;
        document.getElementById('checkbox-gin').checked = false;
    }

    Array.prototype.forEach.call(spansQtd, function(item) {
        var idQtdBebida = item.id;
        idQtdBebida = idQtdBebida.replace("span-qtd-bebida-", "qtd-");

        var qtdBebida = document.getElementById(idQtdBebida).value;
        var qtdAdultos = document.getElementById('input_qtd_adultos').value;
        var qtdCriancas = document.getElementById('input_qtd_criancas').value;
        var bebida = item.id.replace("span-qtd-bebida-", "");

        //caso seja energético
        if (bebida == "energetico") {

            var qtdEnergetico = Math.ceil(eval(qtdAdultos) / eval(qtdBebida));
            var qtdEnergeticoVodka = 0;
            var qtdEnergeticoGin = 0;

            //5 energéticos para cada vodka
            if (document.getElementById('resultado-vodka').style.display != 'none') {
                var qtdVodka = document.getElementById('qtd-vodka').value;
                qtdEnergeticoVodka = Math.ceil(eval(qtdAdultos) / eval(qtdVodka))
            }

            //5 energéticos para cada gin
            if (document.getElementById('resultado-gin').style.display != 'none') {
                var qtdGin = document.getElementById('qtd-gin').value;
                qtdEnergeticoGin = Math.ceil(eval(qtdAdultos) / eval(qtdGin))
            }

            qtdEnergetico += qtdEnergeticoGin * 5;
            qtdEnergetico += qtdEnergeticoVodka * 5;

            var qtdBebidaCriancas = Math.ceil( eval(qtdCriancas) / (eval(qtdBebida) * 2) );

            item.innerHTML = " x " + (qtdEnergetico + qtdBebidaCriancas);
        } else if (bebida == "agua" || bebida == "refrigerante" || bebida == "suco" || bebida == "cha" || bebida == "energetico" || bebida == "tonico" ) {
            //bebidas para adultos e crianças
            var qtdBebidaAdultos = Math.ceil(eval(qtdAdultos) / eval(qtdBebida));
            var qtdBebidaCriancas = Math.ceil( eval(qtdCriancas) / (eval(qtdBebida) * 2) );
            item.innerHTML = " x " + (qtdBebidaAdultos + qtdBebidaCriancas);
        } else {
            //bebidas somente para adultos

            if (bebida == "cerveja") {
                if (qtdAdultos > 10)
                    qtdAdultos = qtdAdultos/100*70
            }

            var qtdBebidaTotal = Math.ceil(eval(qtdAdultos) / eval(qtdBebida));
            item.innerHTML = " x " + qtdBebidaTotal;
        }
    });
}

document.getElementById('Bebida1').onclick = function() {
    var checkbox = document.getElementById('Bebida1');
    if (checkbox.checked) {
        document.getElementById("escolha-bebida-alcoolica").style.display = "inline-block";
    } else {
        document.getElementById("escolha-bebida-alcoolica").style.display = "none";
    }
    calcularBebidas();
}

document.getElementById('Bebida2').onclick = function() {
    var checkbox = document.getElementById('Bebida2');
    if (checkbox.checked) {
        document.getElementById("escolha-bebida-nao-alcoolica").style.display = "inline-block";
    } else {
        document.getElementById("escolha-bebida-nao-alcoolica").style.display = "none";
    }
    calcularBebidas();
}

document.getElementById('Bebida3').onclick = function() {
    var checkbox = document.getElementById('Bebida3');
    if (checkbox.checked) {
        document.getElementById("escolha-bebida-destilada").style.display = "inline-block";
    } else {
        document.getElementById("escolha-bebida-destilada").style.display = "none";
    }
    calcularBebidas();
}

function SelecionarBebida(tipo_bebida) {
    // alert(tipo_bebida);
    var checkbox = document.getElementById('checkbox-' + tipo_bebida);
    if (checkbox.checked) {
        document.getElementById("resultado-" + tipo_bebida).style.display = "inherit";
    } else {
        document.getElementById("resultado-" + tipo_bebida).style.display = "none";
    }
    calcularBebidas();
}