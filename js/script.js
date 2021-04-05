// HOMEPAGE
window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

const toggle = document.getElementById("toggle");
const header = document.getElementById("header");

document.onclick = function(e) {
    if(e.target.id !== 'header' && e.target.id !=='toggle'){
        toggle.classList.remove("active");
        header.classList.remove("active");
    }
}

toggle.onclick = function() {
    toggle.classList.toggle("active");
    header.classList.toggle("active");
}

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

function pagCadastro() {
    var radios = document.getElementsByName("OPCAO");
    for(let k = 0; k < radios.length; k++){
        if (radios[k].checked) {
            let opcaoCadastro = radios[k].value
            console.log(opcaoCadastro)
            switch (opcaoCadastro) {
                case 'op1':
                    window.location.href = 'Cadastro-Aluno.html';
                    break;
                case 'op2': 
                    window.location.href = 'Cadastro-Doador.html';
                    break;
                case 'op3':
                    window.location.href = 'cadastro-escola.html';
                    break;
                default:
              }
            
        }
    }    
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

