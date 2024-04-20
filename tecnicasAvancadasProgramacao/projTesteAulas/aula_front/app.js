
const botao = document.getElementById("salvar");

//ao clicar no botao executa a function
botao.addEventListener('click', function(e){
    e.preventDefault();//nao deixa o forms ser submetido

    const texto = document.getElementById("nome").value;
    
    const lista = document.getElementById('lista')

    const listaInterna = document.createElement('li')//consegue criar um elemento e inserir no html

    listaInterna.innerText = texto;//cola um texto dentro
    lista.appendChild(listaInterna)//joga a listaInterna dentro da lista
    document.body.appendChild(lista)
    texto.value = "";

    
});

function criaElemento(elemento, tipo, id, texto){
    const novoElemento = document.createElement(elemento);
    novoElemento.id = id
    novoElemento.setAttribute("data-id","12333")
    novoElemento.innerText=texto
    novoElemento.placeholder = texto
    novoElemento.value=texto
    novoElemento.style.cursor='pointer'
    novoElemento.style.border = 'solid 2px gold'
    novoElemento.type = tipo
    novoElemento.style.width="70%"

    return novoElemento
}


const container = document.querySelector('aside')
const botao2 = criaElemento('button', 'submit', 'botao', 'clique aqui')
const input2 = criaElemento('input', 'text', 'texto1', 'digite seu nome')
const input3 = criaElemento('input','number', 'texto2', 'digite sua idade')


container.appendChild(input2)
container.appendChild(input3)
container.appendChild(botao2)

document.body.appendChild(container)

