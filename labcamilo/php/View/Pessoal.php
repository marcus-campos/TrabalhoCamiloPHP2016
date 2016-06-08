<?php
	session_start();
	
	if(isset($_POST['tv']) && isset($_POST['ra']) && isset($_POST['ba']) && isset($_POST['au']) && isset($_POST['em']) && isset($_POST['ml']) && isset($_POST['dvd']) && isset($_POST['gel']) && isset($_POST['free']))
	{
		$array = [
			"tv" => $_POST['tv'],
			"ra" => $_POST['ra'],
			"ba" => $_POST['ba'],
			"au" => $_POST['au'],
			"em" => $_POST['em'],
			"ml" => $_POST['ml'],
			"dvd" => $_POST['dvd'],
			"gel" => $_POST['gel'],
			"free" => $_POST['free'],
		];
		
		$_SESSION['pessoal'][] = $array;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server" id="head1">

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marcus Campos, Marcos Richard, Marcio Mansur, Pedro Otávio">
    <title>Cadastramento de Itens</title>
    <link href="Css/Estilo.css" rel="Stylesheet" type="text/css" />
    
    <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css" />
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
    
    <script src="../../assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	
	<link href="../../assets/plugins/bootstrap/js/jquery.dataTables.min.js" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="#" method="post">

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
                                    <input type="radio" name="ra" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ra" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ra" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ra" value="3">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="ra" value="4">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Banheiro
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ba" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ba" value="1">
                                  </td>

                                 <td width="10%">
                                    <input type="radio" name="ba" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ba" value="3">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="ba" value="4">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Automóvel
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="au" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="au" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="au" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="au" value="3">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="au" value="4">
                             </tr>

                              <tr>
                                  <td width="50%">
                                        Empregada mensalista
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="em" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="em" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="em" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="em" value="3">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="em" value="4">
                                  </td>
                             </tr>

                              <tr>
                                  <td width="50%">
                                        Máquina de lavar
                                  </td>

                                 <td width="10%">
                                    <input type="radio" name="ml" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ml" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ml" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="ml" value="3">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="ml" value="4">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Videocassete e/ou DVD
                                  </td>

                                 <td width="10%">
                                    <input type="radio" name="dvd" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="dvd" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="dvd" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="dvd" value="3">
                                  </td>

                                 <td width="10%">
                                  <input type="radio" name="dvd" value="4">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        geladeira
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="gel" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="gel" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="gel" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="gel" value="3">
                                  </td>

                                  <td width="10%">
                                 <input type="radio" name="gel" value="4">
                                  </td>
                             </tr>

                             <tr>
                                  <td width="50%">
                                        Freezer
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="free" value="0">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="free" value="1">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="free" value="2">
                                  </td>

                                  <td width="10%">
                                    <input type="radio" name="free" value="3">
                                  </td>

                                  <td width="10%">
                                  <input type="radio" name="free" value="4">
                                  </td>
                             </tr>
                             <tr id="tr" border="0px">
                                <td colspan="6" border="0px">
								<center>
								   <a class="btn blue" href="../../index.php">Voltar</a>
                                   <button class="btn blue" name="enviar" type="submit">Enviar</button>
                                </center>
								</td>
                             </tr>
                          
              </table> 
              </div>			  
          </div>
        </div>
      </div> 
      </form>

  </body>
</html>