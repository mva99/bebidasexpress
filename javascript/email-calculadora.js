function emailCalculadora() {
    var nome = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('phone').value;
    var mensagem = document.getElementById('text').value;

    if (nome == null || nome == "") {
        alert('Por favor preenche o seu nome!')
        return;
    }

    if (email == null || email == "") {
        alert('Por favor preenche o seu e-mail!')
        return;
    }

    if (telefone == null || telefone == "") {
        alert('Por favor preenche o seu telefone!')
        return;
    }

    if (mensagem == null || mensagem == "") {
        alert('Por favor digite uma mensagem!')
        return;
    }

    $.ajax({
        url: "/email-contato.php",
        method: "get",
        traditional : true,
        data: {
            nome: nome,
            email: email,
            telefone: telefone,
            mensagem: mensagem
        },
        success: function (response) {
            alert('E-mail enviado com sucesso.');
        },
        error: function (response) {
            alert('Ocorreu um erro no envio do e-mail.');
        }
    })


}