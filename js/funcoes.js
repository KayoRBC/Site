// mudar para a página de imagens
function mudaPaginaImagens(){

    window.location.href = "paginas/paginaImagens.html";

}

// mudar para a página de vídeo
function mudaPaginaVideos(){

    window.location.href = "paginas/paginaVideos.html";

}

// mudar para a páfina de login
function mudaPaginaLogin(){

    window.location.href = "paginas/paginaLogin.html";

}

// criando variáveis para o login
var nome;
var sobrenome;
var senha;
var idade;
var cidade;

// função para enviar os dados do login e ternornar um valor, dependendo do retorno ele vai para a próxima página
function gravarDados(){
    // recebendo os inputs
    nome = document.getElementById("nome").value;
    sobrenome = document.getElementById("sobrenome").value;
    senha = document.getElementById("senha").value;
    idade = document.getElementById("idade").value;
    cidade = document.getElementById("cidade").value;

    // verificando se todos os campos estão preenchidos
    if (nome != '' && sobrenome != '' && senha != '' && idade != '' && cidade != ''){
        
        // função para enviar os dados para o servidor
        comunicaServidor();

    }
    else{

        alert("Todos os campos devem ser preenchidos!")

    }
}

// função para enviar os dados para o servidor
function comunicaServidor(){
    // converteno a senha para hash
    var senha_hash_md5 = $.MD5(senha);
    // mandando para o arquivo php e verificando se os inputs coincidem com o cadastro
    $.ajax({
        type:"GET",
        dataType:"json",
        url:"../php/gravarDados.php",
        data: {ch_nome:nome, ch_sobrenome:sobrenome, ch_senha:senha_hash_md5, ch_idade:idade, ch_cidade:cidade},
        success: function(resultado){
            // caso o retorno for "cadastrado", ele irá mudar para a próxima página 
            if (resultado == "Cadastrado"){
                window.location.href = "../paginas/paginaJogo.html";
            }
            // caso o retorno for "não cadastrado", o site irá avisar que os inputs são inválios (não cadastrado)
            else {
                alert("Nao cadastrado");
            }

        }
    })
}