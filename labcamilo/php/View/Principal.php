<?php

include '../Controller/StoreController.php';
use php\Controller\StoreController\StoreController as StoreController;

$hPesquisa = false;

if(isset($_POST['enviar'])) {
    $store = new StoreController();
    $store->store(array($_POST));
}

if(isset($_SESSION['pesquisa']) && $_SESSION['pesquisa'] != NULL)
{
    $hPesquisa = true;
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
    <link href="../../css/Estilo.css" rel="Stylesheet" type="text/css" />
    
    <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
    
    <script src="../../assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
</head>
<body>

    <form id="form1" runat="server" method="post">
    
        <div id="DIV_Maior" style="max-width: 960px; margin:auto;">
           
         <div class="page-title" align="center">
                Cadastro de Itens
            </div>
            <ul class="tabs">
                <li><a href="#" class="pg_ativo">Gerenciador</a> </li>
                <li><?=$hPesquisa==true?"<a href='Resultado.php'>Exibir pesquisa":""?></li>
            </ul>

<div class="pane">
    <div class="base">
        <div>
            <br>
            <div>
                    <label for="usr">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" />
            </div>
            <hr>
            <div class="page-title" align="center">
                Grau de Instrução do chefe de família
            </div>
              <div>
                  <table id="" runat="server"  align="center" border="1px" width="550px">
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
									<input type="checkbox" name="ck_analfabeto" value="0">
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
									<input type="checkbox" name="ck_primario" value="1">
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
									<input type="checkbox" name="ck_fundamental" value="1">
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
									<input type="checkbox" name="ck_medio" value="4">
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
									<input type="checkbox" name="ck_superior" value="8">
								</center>                              
							  </td>
                            </tr>
							 <!--<tr id="tr" border="0px">
                                <td colspan="6" border="0px">
								<center>
								   
                  <a class="btn blue" href="index.php">Voltar</a>
                                   <button class="btn blue" name="enviar" type="submit">Enviar</button>
                                </center> -->
								</td>
                            </tr>
                             
                            
				</table>
				</div>

                <hr>
                <div class="page-title" align="center">
                   Posse de itens
                </div>
            
                            
                  <table id="" runat="server" class=" table2 table-striped" align="center" border="1px" width="550px" margin="1000px 1000px 1000px 1000px">
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
                             <!--<tr id="tr" border="0px">
                                <td colspan="6" border="0px">
                <center>
                   <a class="btn blue" href="index.php">Voltar</a>
                                   <button class="btn blue" name="enviar" type="submit">Enviar</button>
                                </center>
                </td>
                             </tr>-->
                          
              </table> 
              </div>

              <hr>
              <div>
                <div class="page-title" align="center">
                   Renda Chefe de família
                </div>

                  <table id="" runat="server"  align="center" border="1px" width="550px">
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
                      <input type="checkbox" name="ck_acima20salarios" value="0">
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
                  <input type="checkbox" name="ck_10A20" value="1">
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
                  <input type="checkbox" name="ck_4A10" value="2">
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
                  <input type="checkbox" name="ck_2A4" value="3">
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
                  <input type="checkbox" name="ck_ate2sm" value="4">
                </center>                              
                </td>
                            </tr>
                             
                            
        </table>
              </div>
             
          </div>
        </div>
      </div>
        <hr>
        <center>
            <button class="btn blue" name="enviar" type="submit">Enviar</button>
        </center>
        <br>
      </form>

  </body>
</html>