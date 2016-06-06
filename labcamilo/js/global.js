
function Global() {

    parent.document.getElementById('Conteudo').height = document.getElementById('Tamanho').scrollHeight + 40;

  
}

function GlobalGrande() {

    parent.document.getElementById('Conteudo').height = document.getElementById('Tamanho').scrollHeight + 300;

  
}

function Global_Painel() 
{
    var w = screen.width;
    var h = screen.height;
    var total = h - 410;
    parent.document.getElementById('abre_fecha').height = total;
    abre_fecha();
}

function Printing() 
{
    window.print()
}

function abre_fecha() 
{

    if (document.getElementById('tamanho_coluna').style.display == 'none') 
    {

        document.getElementById('tamanho_coluna').style.display = '';
        document.getElementById('icone_esconde').src = 'Img/menos.png';
        document.getElementById('icone_esconde').title = "Clique para Esconder o Menu";

    }
    else 
    {

        document.getElementById('tamanho_coluna').style.display = 'none';
        document.getElementById('icone_esconde').src = 'Img/mais.png';
        document.getElementById('icone_esconde').title = "Clique para Abrir o Menu";
    }


}

function carregando() 
{
    document.getElementById('carrega').style.display = 'block';
    document.getElementById('carrega_texto').style.display = 'block';
}