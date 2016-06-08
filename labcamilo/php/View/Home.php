<?php
    echo $_SESSION['iniciado'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server" id="head1">

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marcus Campos, Marcos Richard, Marcio Mansur, Pedro Otávio">
    <title>Pagina inicial</title>
    <link href="Css/Estilo.css" rel="Stylesheet" type="text/css" />

    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />

    <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
</head>
<body>
    <form id="form1" action="index.php" method="post">

      <div id="Tamanho">
         <div class="page-title">
                Pesquisas
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
                  <table id="" runat="server" class="table-striped" align="left" border="1px" width="550px">
                            <tr class="active titulo">
                                <td colspan="10">
                                    <div>
                                        <center><strong>Pesquisa</strong></center>
                                    </div>
                                </td>
                            </tr>
                            <tr>
								<td width="50%">
									<center><a href="php/View/pessoal.php">Pesquisa</a></center>
								</td>
                            </tr>
                            <tr>
								<td width="50%">
									<center><a href="php/View/resultados.php">Resultados</a></center>
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