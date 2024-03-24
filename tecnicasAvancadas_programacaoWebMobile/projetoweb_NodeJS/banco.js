// Importa o módulo `sequelize` do pacote `sequelize`
const Sequelize = require("sequelize")

// Cria uma nova instância do Sequelize para se conectar ao banco de dados MySQL

//Os parâmetros passados são o nome do banco de dados 
// ("exemplo"), o nome de usuário ("root"), a senha (vazia ""), o host do banco de dados 
// ("localhost") e o dialeto do banco de dados ("mysql").
const sequelize = new Sequelize ("exemplo", "root", "", {
    host: "localhost",
    dialect: "mysql"
})


// Verifica a autenticação com o banco de dados
//then é um método usado em Promises para manipular o resultado bem-sucedido
sequelize.authenticate().then(function(){
    console.log("Conectado com sucesso!")// Se autenticado com sucesso, exibe essa mensagem
}).catch(function(erro){//é usado para definir o que fazer se ocorrer um erro durante a autenticação.
    console.log("Falha ao conectar: " + erro)// Se falhar na autenticação, exibe essa mensagem com o erro
})

// Define um modelo de dados para a tabela 'agendamentos' no banco de dados
const Agendamentos = sequelize.define("agendamentos", {
    nome:{
        type: Sequelize.STRING
    },
    endereco:{
        type: Sequelize.STRING
    },
    bairro:{
        type: Sequelize.STRING
    },
    cep:{
        type: Sequelize.INTEGER
    },
    cidade:{
        type: Sequelize.STRING
    },
    estado:{
        type: Sequelize.STRING
    },
    observacao:{
        type: Sequelize.TEXT
    },
})

// é um método Sequelize que sincroniza o modelo com o banco de dados. 
// Ao passar {force: true}, estamos instruindo o Sequelize a forçar a sincronização, 
// o que significa que ele irá recriar a tabela no banco de dados se ela já existir, 
// eliminando quaisquer dados existentes na tabela. executar somente ao criar a tabela dps comentar
// -------------------- Agendamentos.sync({force: true})


// Exporta o modelo 'Agendamentos' para ser utilizado em outros arquivos
module.exports = Agendamentos

// Cria um novo registro na tabela 'agendamentos' no banco de dados
// Agendamentos.create({
//     nome: "usuario novo",
//     endereco: "Av Aguia de Haia",
//     bairro: "AE carvalho",
//     cep: "08411190",
//     cidade: "São Paulo",
//     estado: "SP",
//     observacao: "Realizar os serviços de alimento e balanceamento do meu veículo"
// })

