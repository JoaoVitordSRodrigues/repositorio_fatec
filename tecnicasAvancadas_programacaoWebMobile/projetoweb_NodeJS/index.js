// Importação do módulo Express
const express = require("express") //importação do modulo do express
// Criação de uma instância do Express
const app = express() // utilizao dentro da constante app

// Importação do arquivo 'banco' onde há a definição do modelo 'Agendamentos'
const Agendamentos = require('./banco')


// Inicia o servidor Express na porta 8081
app.listen(8081, function(){
    console.log("servidor rodando na porta 8081")
}) //8081 é a porta, criando o servidor web com a porta
// Function para quando o servidor for iniciado, exibir uma mensagem para indicar que está rodando
// Isso impede que apenas o console fique piscando sem feedback visível, agora aparecerá a mensagem


// Define uma rota para a página inicial ("/")
app.get("/", function(req, res){
    // Retorna a mensagem "Pag inicial" quando a rota é acessada
    res.end("Pag inicial") //exibindo na web
})


// Define uma rota para cadastrar agendamentos
app.get("/cadastrar/:nome/:endereco/:bairro/:cep/:cidade/:estado/:observacao", function(req, res){
    // Cria um novo registro de agendamento no banco de dados usando os dados da requisição
    Agendamentos.create({
        nome: req.params.nome,
        endereco: req.params.endereco,
        bairro: req.params.bairro,
        cep: req.params.cep,
        cidade: req.params.cidade,
        estado: req.params.estado,
        observacao: req.params.observacao
    })
    // Retorna a mensagem "dados cadastrados" como JSON quando o cadastro é realizado
    res.json("dados cadastrados") //exibindo na web
})





