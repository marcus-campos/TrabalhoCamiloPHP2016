<?php
	session_start();
	
	
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
</head>
<body>
    <form id="form1" action="#" method="post">

      <div id="Tamanho">
         <div class="page-title">
                Cadastro de Itens
            </div>
            <ul class="tabs">
                <li><a href="#" class="pg_ativo">Gerenciador</a> </li>
            </ul>
       <div class="pane">
            <div class="base">
				<div>
                  <table id="" runat="server"  align="left" border="1px" width="550px">
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
									Possui
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
								<center>
									<input type="radio" name="rb_estudo" value="0">
								</center>
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
								<center>
									<input type="radio" name="rb_estudo" value="1">
								</center>
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
								<center>
									<input type="radio" name="rb_estudo" value="2">
								</center>
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
								<center>
									<input type="radio" name="rb_estudo" value="3">
								</center>
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
								<center>
									<input type="radio" name="rb_estudo" value="4">
								</center>
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
				<br>
                <div margin="1000px 1000px 1000px 1000px" id="teste" align="botton">

                </div>

              </div>
            </div>
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