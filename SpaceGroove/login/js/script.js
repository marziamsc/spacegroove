function validaForm() {
    if (document.login.email.value=="") {
        alert("Inserire l’email");
        return false;
    }
    if (document.login.password.value=="") {
        alert("Inserire password");
        return false;
    }

    if (document.login.remember.checked) {
        alert("Hai scelto di essere ricordato per i prossimi accessi");
    }
    else {
        alert("Hai scelto di NON essere ricordato per i prossimi accessi");
    }

    alert("Dati inseriti correttamente");
    return true;
}