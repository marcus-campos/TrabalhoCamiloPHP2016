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
                  <table id="TB_Cadastro_Restaurante" runat="server"  align="left" border="1px" width="550px">
                            <tr class="active titulo">
                                <td>
                                   
                                    <strong>Nomencaltura Antiga</strong>
                                   
                                </td>
                                <td>
                                    <div>
                                        <strong>Nomencaltura Atual</strong>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                              <td>
                                Analfabeto / Primário incompleto
                              </td>

                              <td>
                                Analfabeto / Até 3a. Série Fundamental
                              </td>

                              <td>
                                <input type="radio" name="rb_analfabeto" value="0">
                              </td>
                            </tr>

                            <tr>
                              <td>
                                Primário completo / Ginasial incompleto
                              </td>

                              <td>
                               Até 4a. Série Fundamental
                              </td>

                              <td>
                                <input type="radio" name="rb_primario" value="1">
                              </td>
                            </tr>

                             <tr>
                              <td>
                                Ginasial completo / Colegial incompleto
                              </td>

                              <td>
                               Fundamental completo
                              </td>

                              <td>
                                <input type="radio" name="rb_fundamental" value="1">
                              </td>
                            </tr>

                            <tr>
                              <td>
                               Colegial completo / Superior incompleto
                              </td>

                              <td>
                               Médio completo
                              </td>

                              <td>
                                <input type="radio" name="rb_medio" value="4">
                              </td>
                            </tr>

                            <tr>
                              <td>
                               Superior completo
                              </td>

                              <td>
                               Superior completo
                              </td>

                              <td>
                                <input type="radio" name="rb_superior" value="8">
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
