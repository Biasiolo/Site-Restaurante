$(document).ready(function() {
    $("#formContato").submit(function(e) {
        e.preventDefault();

        // Obtenha os valores dos campos do formulário
        var nome = $("#nome").val();
        var email = $("#email").val();
        var telefone = $("#telefone").val();
        var mensagem = $("#mensagem").val();

        // Crie um objeto com os dados para enviar ao servidor
        var data = {
            nome: nome,
            email: email,
            telefone: telefone,
            mensagem: mensagem
        };

        // Faça uma solicitação AJAX para o servidor (usando jQuery)
        $.ajax({
            type: "POST",
            url: "enviar_email.php", // Substitua pelo caminho do seu script PHP
            data: data,
            success: function(response) {
                alert("E-mail enviado com sucesso!");
            },
            error: function(error) {
                alert("Erro ao enviar o e-mail. Por favor, tente novamente.");
            }
        });
    });
});
