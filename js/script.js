function cadastro() {
    var email = document.getElementById("inputemail").value;
    var senha1 = document.getElementById("inputpassword").value;
    var senha2 = document.getElementById("inputpassword2").value;

    if (email == "") {
        alert("Por favor, preencha o campo de e-mail.");
        return false;
    }

    if (senha1 != senha2) {
        alert("As senhas não correspondem. Tente novamente.");
        return false;
    }

    window.location.href = "cadastrofim.php";
    return true;
}

function redirectlogin() {
    window.location.href = "login.php";
}

function redirectrec2() {
    // Obtém o valor do campo de e-mail
    var email = document.getElementById('emailrec').value;

    // Verifica se o campo de e-mail está preenchido
    if (email.trim() !== '') {
        // Se estiver preenchido, redireciona para a próxima página com o valor do e-mail
        window.location.href = 'recuperar2.php?email=' + encodeURIComponent(email);
    } else {
        // Se não estiver preenchido, exibe uma mensagem de erro (pode personalizar conforme necessário)
        alert('Por favor, preencha o campo de e-mail.');
    }
}

function redirect4() {

    var senharec1 = document.getElementById("inputpassword").value;
    var senharec2 = document.getElementById("inputpassword2").value;

    if (senharec1.trim() === "" || senharec2.trim() === "") {
        alert("Por favor, preencha o campo de senha.");
        return false;
    }
    if(senharec1 != senharec2){
    alert("As senhas devem ser iguais.");
        return false;
    } else {
        window.location.href = "recuperar4.php";
    }
    return true;
}

function mostrarCC() {
    document.getElementById('cardFieldsCC').style.display = 'block';
}

function esconderCC() {
    document.getElementById('cardFieldsCC').style.display = 'none';
}

function mostrarPIX() {
    document.getElementById('cardFieldsPIX').style.display = 'block';
}

function esconderPIX() {
    document.getElementById('cardFieldsPIX').style.display = 'none';
}

function mostrarBOLETO() {
    document.getElementById('cardFieldsBOLETO').style.display = 'block';
}

function esconderBOLETO() {
    document.getElementById('cardFieldsBOLETO').style.display = 'none';
}

const taxaDiaria = 20; // Valor da diária em reais
