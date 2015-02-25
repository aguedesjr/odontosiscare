<!-- INCLUI O INICIO DO ARQUIVO -->
<? include ("header.php"); ?>

<script src="js/cep.js" type="text/javascript"></script> <!-- SCRIPT CEP -->
<script src="js/jquery.maskedinput.js" type="text/javascript"></script> <!-- SCRIPT MASK -->
    
    <script>
        $(function() {
            
            jQuery(function($){
                $("#tel").mask("(99) 9999-9999");
            });
            
            $("#datepicker").datepicker({
                //date: "2013-01-01", // set init date
                format: "dd/mm/yyyy", // set output format
                effect: "slide", // none, slide, fade
                position: "bottom", // top or bottom,
                locale: 'pt', // 'ru' or 'en', default is $.Metro.currentLocale (metro-locale.js)
            });
        });
    </script>
    
<?
$sql = "SELECT nome, id FROM convenios";
$resultado = mysql_query($sql);

$sqlp = "SELECT nome, id FROM profissionais WHERE tipo = 'CRO'";
$resultadop = mysql_query($sqlp);
?>

<!-- INICIO DO ARQUIVO -->
<body class="metro">
    
    <br>

    <img src="imagens/photo1.jpg" />
    
    <center><img src="imagens/principal1.png" /></center>
    <br><br>
    
    <div class="grid">
        <div class="row">
    
            <? include ("menu.php"); ?>
            <div class="span1"></div>
            <div class="span10">
                <form method="POST" action="salvapront.php" name="salvaprontuario" id="salvaprontuario">
                <div class="fichaprontuario">
                <div class="tab-control" data-role="tab-control">
                    <ul class="tabs">
                        <li class="active"><a href="#_page_1">Dados Pessoais</a></li>
                    </ul>
                    <div class="frames">
                        <div class="frame" id="_page_1">
                            <label>Nome</label>
                            <div class="input-control text" data-role="input-control">
                                <input type="text" id="nome" name="nome" placeholder="Nome do Paciente">
                            </div>
                            <table><tr>
                            <td bgcolor="#FDFDFD">
                                <label>Convênio</label>
                                <div class="input-control select">
                                    <select name="convenio" id="convenio">
                                        <option value="">SELECIONE</option>
                                        <? while ($linhas = mysql_fetch_array($resultado, MYSQL_NUM)){ ?>
                                        <option value=<? echo $linhas[1];?>><? echo utf8_encode($linhas[0]);?></option>
                                        <?};?>
                                    </select>
                                </div>
                            </td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                            <td bgcolor="#FDFDFD">
                                <label>Profissional</label>
                                <div class="input-control select">
                                    <select name="profissional" id="profissional">
                                        <option value="">SELECIONE</option>
                                        <? while ($linhasp = mysql_fetch_array($resultadop, MYSQL_NUM)){ ?>
                                        <option value=<? echo $linhasp[1];?>><? echo utf8_encode($linhasp[0]);?></option>
                                        <?};?>
                                    </select>
                                </div><br /></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                            <td bgcolor="#FDFDFD">
                                <td bgcolor="#FDFDFD">
                                    <label>Data</label>
                                    <div class="input-control text" id="datepicker">
                                        <input type="text" name="data" placeholder="Data">
                                        <button class="btn-date"></button>
                                    </div>
                                </td>
                                <br /></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                            </tr>
                            </table>
                            <label>Endereço</label>
                            <div class="input-control text" data-role="input-control">
                                <input type="text" name="endereco" placeholder="Endereço">
                            </div>
                            
                            <table>
                                <tr>
                                    <td bgcolor="#FDFDFD">
                                        <label>Bairro</label>
                                        <div class="input-control text size4" data-role="input-control">
                                            <input type="text" name="bairro" placeholder="Bairro">
                                        </div>
                                    </td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                                    <td bgcolor="#FDFDFD">
                                        <label>Telefone</label>
                                        <div class="input-control text size2" data-role="input-control">
                                            <input type="text" name="tel" id="tel" placeholder="Telefone">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            
                            <center>
                                
                                <button type="submit" class="image-button primary image-left">
                                    Imprimir
                                    <i class="icon-printer on-left" style="top: -3px; left: 7px">
                                    </i>
                                </button>
                                <!--<button type="button" onclick="zerar();" class="image-button danger image-left">
                                    Limpar
                                    <i class="icon-spin on-left" style="top: -2px; left: 7px">
                                    </i>
                                </button>-->
                                
                            </center>
                        </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
            <br>
            
        </div>
    </div>

</body>
<!-- FIM DO ARQUIVO -->

<!-- INCLUI O FIM DO ARQUIVO -->
<? include ("footer.php"); ?>