function openAjax() {
    var ajax;
    try {
        ajax = new XMLHttpRequest();
    }
    catch (ee) {
        try {
            ajax = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e) {
            try {
                ajax = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (E) {
                ajax = false;

            }
        }

    }
    return ajax;

}


function ultimosAcessos() {

    var ajax = openAjax();

    var url = "RealTime_Ultimos_Acessos.aspx";

    ajax.open("POST", url, true);

    ajax.send("ok");

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {

            document.getElementById('ultimosAcessos').innerHTML = ajax.responseText;
        }

    }


}


function ultimosBeneficiarios() {

    var ajax = openAjax();

    var url = "RealTime_Ultimos_Beneficiarios.aspx";

    ajax.open("POST", url, true);

    ajax.send("ok");

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {

            document.getElementById('ultimosBeneficiarios').innerHTML = ajax.responseText;
        }

    }

}

function ultimosSobra() {

    var ajax = openAjax();

    var url = "RealTime_Ultimos_Sobra.aspx";

    ajax.open("POST", url, true);

    ajax.send("ok");

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {

            document.getElementById('ultimosSobra').innerHTML = ajax.responseText;
        }

    }

}



function chegadaLeite() {

    var ajax = openAjax();

    var url = "RealTime_Ultimos_ChegadaLeite.aspx";

    ajax.open("POST", url, true);

    ajax.send("ok");

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {

            document.getElementById('chegadaLeite').innerHTML = ajax.responseText;
        }

    }

}


function observacoes() {

    var ajax = openAjax();

    var url = "RealTime_Ultimos_Observacoes.aspx";

    ajax.open("POST", url, true);

    ajax.send("ok");

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {

            document.getElementById('observacoes').innerHTML = ajax.responseText;
        }

    }


}






