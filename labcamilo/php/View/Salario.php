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
                                   
                                    <strong>Salários Mínimos(SM)</strong>
                                   
                                </td>
                                <td>
                                    <div>
                                        <strong>Renda Familiar(R$)</strong>
                                    </div>
                                </td>
                                <td>
									Possui
                                </td>
                            </tr>
                            <tr>
                              <td>
                                Acima de 20SM
                              </td>

                              <td>
                                R$ 15.760,01 ou mais
                              </td>

                              <td>
								<center>
									<input type="checkbox" name="ck_Acima20salario" value="a">
								</center>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                10 a 20 SM 
                              </td>

                              <td>
                              De R$ 7.880,01 a R$ 15.760,00
                              </td>

                              <td>
								<center>
									<input type="checkbox" name="ck_10A20" value="b">
								</center>
                              </td>
                            </tr>

                             <tr>
                              <td>
                                4 a 10 SM
                              </td>

                              <td>
                               De R$ 3.152,01 a R$ 7.880,00
                              </td>

                              <td>
								<center>
									<input type="checkbox" name="ck_4A10" value="c">
								</center>
                              </td>
                            </tr>

                            <tr>
                              <td>
                               2 a 4 SM
                              </td>

                              <td>
                               De R$ 1.576,01 a R$ 3.152,00
                              </td>

                              <td>
								<center>
									<input type="checkbox" name="ck_2A4" value="d">
								</center>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                Até 2 SM
                              </td>

                              <td>
                               Até R$ 1.576,00
                              </td>

                              <td>
								<center>
									<input type="checkbox" name="ck_ate2Sm" value="e">
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