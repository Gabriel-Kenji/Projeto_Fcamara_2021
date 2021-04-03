// HOMEPAGE
function openLogin() {
    document.getElementById("btnLogin").style.top = '0';
    var container = document.querySelector(".container-modal");
    container.classList.remove('active')
}

function closeLogin() {
    document.getElementById("btnLogin").style.top = '-150%';
}

function alternarForm() {
    console.log('ok')
    var container = document.querySelector(".container-modal");
    container.classList.toggle('active')
}

function openCadastro() {
    document.getElementById("btnLogin").style.top = '0';
    var container = document.querySelector(".container-modal");
    container.classList.add('active')
}

// CADASTRO-ALUNO

const limparFormulario = () => {
    document.getElementById('uf').value = '';
    document.getElementById('cidade').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('bairro').value = '';
}

const preencherFormulario = (endereco) => {
    document.getElementById('uf').value = endereco.uf;
    document.getElementById('cidade').value = endereco.localidade;
    document.getElementById('bairro').value = endereco.bairro;
    document.getElementById('bairro').value = endereco.bairro;
}

const eNumero = (numero) => /^[0-9]+$/.test(numero);

const cepValido = (cep) => cep.length == 8 && eNumero(cep);

const pesquisarCep = async() => {
    limparFormulario();
    const cep = document.getElementById('cep').value;
    const url = `http://viacep.com.br/ws/${cep}/json/`;
        if(cepValido(cep)){
            const dados = await fetch(url)
            const endereco = await dados.json();
            if(endereco.hasOwnProperty('erro')){
                document.getElementById('uf').value = 'CEP não encontrado';
            }else{
                preencherFormulario(endereco);
            }
        }else {
            document.getElementById('uf').value = 'CEP incorreto';
        }
    }

document.getElementById('cep')
        .addEventListener('focusout', pesquisarCep);


// SELECAO MATERIAIS  

function listarItens(){
    let itens = ["caderno", "lapis", "caneta", "Michel"];
    let lista = document.getElementById('lista');
        for(var i = 0; i < itens.length; i++) {
            let linha = document.createElement('tr')
            let item = document.createElement('td');
            let buttons = document.createElement('td');

            let buttonAcrecimo = document.createElement('a')
            buttonAcrecimo.innerHTML = `<button onclick="somaQnt(${i})">+</button>`

            let quantidade = document.createElement('div')
            quantidade.innerHTML = `<input id="${i}" value=0 disabled="disabled"></input>`

            let buttonDescrecimo = document.createElement('a')
            buttonDescrecimo.innerHTML = `<button onclick="subtraiQnt(${i})">-</button>`

            item.appendChild(document.createTextNode(itens[i]));
            lista.appendChild(linha);
            linha.appendChild(item)
            linha.appendChild(buttons);
                buttons.appendChild(buttonDescrecimo)
                buttons.appendChild(quantidade)
                buttons.appendChild(buttonAcrecimo)
                buttons.classList.add('colunaQnt')
        }
}

function subtraiQnt(item) {
    event.preventDefault();
    let quantidade = document.getElementById(item).value;
    let subtracao = 1;
    let total = parseInt(quantidade) - parseInt(subtracao);
    document.getElementById(item).value = total;
}

function somaQnt(item) {
    event.preventDefault();
    let quantidade = document.getElementById(item).value;
    let soma = 1;
    let total = parseInt(quantidade) + parseInt(soma);
    document.getElementById(item).value = total;
}

