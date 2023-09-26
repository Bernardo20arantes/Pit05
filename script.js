const username = document.getElementById("nome");
const email = document.getElementById("Email");
const telefone = document.getElementById("Cell");
const password = document.getElementById("senha");
const cpf = document.getElementById("Cpf");
const cep = document.getElementById("cep");

function checkEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
        email
    );
}
function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}
function mtel(v) {
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}

function mascara_CPF() {
    var cpf_formatado = document.getElementById("Cpf").value
    if (cpf_formatado[3] != ".") {
        if (cpf_formatado[3] != undefined) {
            document.getElementById("Cpf").value = cpf_formatado.slice(0, 3) + "." + cpf_formatado[3];
        }
    }
    if (cpf_formatado[7] != ".") {
        if (cpf_formatado[7] != undefined) {
            document.getElementById("Cpf").value = cpf_formatado.slice(0, 7) + "." + cpf_formatado[7];
        }
    }
    if (cpf_formatado[11] != "-") {
        if (cpf_formatado[11] != undefined) {
            document.getElementById("Cpf").value = cpf_formatado.slice(0, 11) + "-" + cpf_formatado[11]
        }
    }

}
function mascara_Cell(){
    var telefone_formatado = document.getElementById("Cell").value
    if (telefone_formatado[0]!="(")
    {
        if (telefone_formatado[0]!=undefined)
            {
                document.getElementById("Cell").value=telefone_formatado.slice(0,0)+"("+telefone_formatado[0];
            }
        }
        if (telefone_formatado[3]!=")")
    {
        if (telefone_formatado[3]!=undefined)
            {
                document.getElementById("Cell").value=telefone_formatado.slice(0,3)+")"+telefone_formatado[3];
            }
        }
    if (telefone_formatado[9]!="-")
    {
        if(telefone_formatado[9]!=undefined)
        {
            document.getElementById("Cell").value=telefone_formatado.slice(0,9)+"-"+telefone_formatado[9]
        }
    }

}

function mascara_cep() {
    var cep_formatado = document.getElementById("cep").value

    if (cep_formatado[5] != "-") {
        if (cep_formatado[5] != undefined) {
            document.getElementById("cep").value = cep_formatado.slice(0, 5) + "-" + cep_formatado[5]
        }
    }

}       
var controleCampo = 1;
var formulario = document.getElementById('Formulario');

function adicionarCampo() {
    controleCampo++;

    var form = document.createElement('form');
    form.method = 'post';
    form.className = 'Form';

    var h3 = document.createElement('h3');
    if (controleCampo % 2 === 0) {
        h3.textContent = 'Remedio - Cadastrar';
    } else {
        h3.textContent = 'Remedio - Alterar';
    }

    var input = document.createElement('input');
    input.type = 'submit';
    if (controleCampo % 2 === 0) {
        input.value = 'Cadastrar';
    } else {
        input.value = 'Alterar';
    }

    form.appendChild(h3);
    form.appendChild(input);
    formulario.appendChild(form);
}

function removerCampo() {
    if (controleCampo > 1) {
        var lastForm = formulario.lastElementChild;
        formulario.removeChild(lastForm);
        controleCampo--;
    }
}

document.getElementById('adicionar').addEventListener('click', adicionarCampo);
document.getElementById('remover').addEventListener('click', removerCampo);

