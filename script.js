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
