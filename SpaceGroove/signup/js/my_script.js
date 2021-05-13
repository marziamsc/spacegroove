function validaForm() {
    if (document.signup.nome.value=="") {
        alert("Inserire nome");
        return false;
    }
    if (document.signup.cognome.value=="") {
        alert("Inserire cognome");
        return false;
    }

    if (document.signup.email.value=="") {
        alert("Inserire l’email");
        return false;
    }
    if (document.signup.email_confirm.value=="") {
        alert("Confermare l’email");
        return false;
    }
    if (document.signup.email.value != document.signup.email_confirm.value) {
        alert("Email errata");
        return false;
    }

    if (document.signup.password.value=="") {
        alert("Inserire password");
        return false;
    }
    if (document.signup.password_confirm.value=="") {
        alert("Confermare password");
        return false;
    }
    if (document.signup.password.value != document.signup.password_confirm.value) {
        alert("Password errata");
        return false;
    }

    alert("Dati inseriti correttamente");
    return true;
}

function controllaNome() {
    var v=parseInt(document.signup.nome.value);
    if (!isNaN(v)) {
        alert("Il nome non può essere un numero");
        return false;
    }
  return true;
}

function controllaCognome() {
    var v=parseInt(document.signup.cognome.value);
    if (!isNaN(v)) {
        alert("Il cognome non può essere un numero");
        return false;
    }
  return true;
}

function controllaNumero() {
    if (document.signup.tel.value!="") {
        var v=parseInt(document.signup.tel.value);
        if (isNaN(v)) {
            alert("Formato del numero errato");
            return false;
        }
    }
  return true;
}

function controllaCAP() {
    if (document.signup.cap.value.length!=5) {
      alert("Il CAP deve contenere 5 cifre");
      return false;
    }
    var v=parseInt(document.signup.cap.value);
    if (isNaN(v)) {
      alert("Il CAP deve essere un numero");
      return false;
    }
    return true;
  }