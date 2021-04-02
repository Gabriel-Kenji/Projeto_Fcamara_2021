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

