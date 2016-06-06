<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server" id="head1">

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cadastramento de Itens</title>
    <link href="Css/Estilo.css" rel="Stylesheet" type="text/css" />
    
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
    
    <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap2-typeahead.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"
        type="text/javascript"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
    <script src="assets/scripts/app.js" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
    <script>
        jQuery(document).ready(function () {
            // initiate layout and plugins
            App.init();
        });
    </script>
    <script type="text/javascript" src="Js/global.js"></script>
    <script type="text/javascript" src="Js/jquery.alphanumeric.pack.js"></script>
    <script type="text/javascript" src="Js/jquery.maskedinput.pack.js"></script>
    <script type="text/javascript" src="Js/jquery.maskMoney_zero.js"></script>
    <script type="text/javascript" language="javascript">

        $(function () {

            //// TIPOS DE MÁSCARAS

            var maskTelefone = "(99) 9999-9999"
            var maskCEP = "99.999-999"
            var maskCPF = "999.999.999-99"
            var maskCNPJ = "99.999.999/9999-99"
            var maskData = "99/99/9999"
            var maskHora = "99:99"
            var maskDataMesAno = "99/9999"
            var maskPlaca = "aaa-9999"
            var maskCelular = "(99) 99999-9999"


            //// CAMPOS COM MÁSCARA
            $("#TXT_Valor").maskMoney();
            




        })

    </script>
    <style type="text/css">
        .style1 {
            height: 62px;
        }
    </style>
</head>
<body>
    <form id="form1" action="index.php" method="post">

      <div id="Tamanho">
         <div class="page-title">
                Cadastro de Itens
            </div>
            <ul class="tabs">
                <li><a href="#" class="pg_ativo">Gerenciador</a> </li>
            </ul>
      
        <!--<h2 class="form-signin-heading">Calculando IMC</h2>
        <label for="txbPeso" class="sr-only">Peso</label>
        <input type="text" id="txbPeso" name="txbPeso" class="form-control" placeholder="Peso" required>

        <label for="txbAltura" class="sr-only">Altura</label>
        <input type="text" id="txbAltura" name="txbAltura" class="form-control" placeholder="Altura" required>
        
        <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Calcular</button>-->
       <div class="pane">
            <div class="base">

              <div>
                  <table id="TB_Cadastro_Restaurante" runat="server" class="table-striped" align="left" border="1px" width="550px">
                            <tr class="active titulo">
                                <td>
                                   
                                    <strong>Itens</strong>
                                   
                                </td>
                                <td colspan="5">
                                    <div>
                                        <strong>Quantidade de Itens </strong>
                                    </div>
                                </td>
                            </tr>
                             
                             <tr>
                                  <td width="50%">
                                  </td>
                                  <td width="10%">
                                  0
                                  </td>
                                  <td width="10%">
                                   1
                                  </td>
                                  <td width="10%">
                                    2
                                  </td>
                                  <td width="10%">
                                    3
                                  </td>
                                  <td width="10%">
                                    4 ou +
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Televisão a cores
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="tv" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="tv" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="tv" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="tv" value="3">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="tv" value="4">
                                  </td>
                             </tr>
                             <tr>
                                  <td width="50%">
                                        Rádio
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ra_0" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ra_1" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ra_2" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ra_3" value="3">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="ra_4" value="4">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Banheiro
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ba_0" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ba_1" value="4">
                                  </td>

                                 <td width="10%">
                                    <input type="radio" name="ba_2" value="5">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ba_3" value="6">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="ba_4" value="7">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Automóvel
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="au_0" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="au_1" value="4">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="au_2" value="7">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="au_3" value="9">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="au_4" value="9">
                             </tr>

                              <tr>
                                  <td width="50%">
                                        Empregada mensalista
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="em_0" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="em_1" value="3">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="em_2" value="4">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="em_3" value="4">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="em_4" value="4">
                                  </td>
                             </tr>

                              <tr>
                                  <td width="50%">
                                        Máquina de lavar
                                  </td>

                                 <td width="10%">
                                    <input type="radio" name="ml_0" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ml_1" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ml_2" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ml_3" value="2">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="tv_3" value="2">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Videocassete e/ou DVD
                                  </td>

                                 <td width="10%">
                                    <input type="radio" name="dvd_0" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="dvd_1" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="dvd_2" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="dvd_3" value="2">
                                  </td>

                                 <td width="10%">
                                  <input type="radio" name="dvd_4" value="2">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        geladeira
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="gel_0" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="gel_1" value="4">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="gel_2" value="4">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="gel_3" value="4">
                                  </td>

                                  <td width="10%">
                                 <input type="radio" name="gel_4" value="4">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Freezer
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="free_0" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="free_1" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="free_2" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="free_3" value="2">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="free_4" value="2">
                                  </td>
                             </tr>
                             <tr id="tr" border="0px">
                                <td colspan="6" border="0px">
                                   <button class="btn blue" name="enviar" type="submit">Enviar</button>
                                </td>
                             </tr>
                          
              </table>
              <br>
                <div margin="1000px 1000px 1000px 1000px" id="teste" align="botton">
                   
                </div>
              
              </div>
              <div width="50%">
              </div>
          </div>
        </div>
      </div> 
      </form>

  </body>
</html>



<?php

	//error_reporting(E_ALL);
	//ini_set("display_errors", 1);
	require('./classes/model.php'); 

	//$objModel = new Model();

	//if (isset($_POST['enviar'])) {

	//	$objModel->setNome($_POST['txbNome']);
	//	$objModel->setEmail($_POST['txbEmail']);

	//	$retorno = $objModel->salvar();
	//	echo 'Cadastro realizado com sucesso.';
	//}

	//if (!empty($_REQUEST['id_delete'])){
		//$objModel->excluir($_REQUEST['id_delete']);
	//}

  $tv = $_POST["tv"];
  echo $tv;
	
?>