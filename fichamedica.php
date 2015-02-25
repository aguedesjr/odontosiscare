<!-- INCLUI O INICIO DO ARQUIVO -->
<? include ("header.php"); ?>

<script src="js/cep.js" type="text/javascript"></script> <!-- SCRIPT CEP -->
<script src="js/jquery.maskedinput.js" type="text/javascript"></script> <!-- SCRIPT MASK -->

    <script>
                
        //function zerar() {
          //  document.getElementById("divcpf").className = "input-control text";
          //  document.getElementById("divnome").className = "input-control text";
          //  document.getElementById("salvapaciente").reset();
            
        //}
        
        function valida(form) {
            if (form.codigo.value=="") {
                alert("Codigo não informado!!");
                document.getElementById("divcodigo").className = "input-control text size2 error-state";
                form.codigo.focus();
                return false;
            }
            
            if (form.codigo.value!="") {
                document.getElementById("divcodigo").className = "input-control text size2";
            }
        };
        
    </script>
    
    <script>
        $(function() {
            
            //jQuery(function($){
                //$("#tel").mask("(99) 9999-9999");
            //});
            
            $("#buscarPaciente").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                icon: '',
                                title: 'Buscar Paciente',
                                content: '',
                                padding: 200,
                                onShow: function(_dialog){
                                    var content =
                                            '<!-- TABELA COM OS HORÁRIOS AGENDADOS -->' +
                                
                                            '<table class="table striped" id="dataTables-1">' +
                                                '<thead>' +
                                                    '<tr>' +
                                                        '<th bgcolor="#FDFDFD" align="left">Código</th>' +
                                                        '<th bgcolor="#FDFDFD" align="left">Nome</th>' +
                                                    '</tr>' +
                                                '</thead>' +
                                                '<tbody>' +
                                                '</tbody>' +
                                                '<tfoot>' +
                                                '</tfoot>' +
                                            '</table><br />' +
                                            
                                            '<!-- FIM DA TABELA HORÁRIOS AGENDADOS -->';
                                            
                                    $.Dialog.title("Buscar Paciente");
                                    $.Dialog.content(content);
                                }
                            });
                        });
                        
            $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "getpacientes.php",
                        "aoColumns": [
                            { "mData": "codigo" },
                            { "mData": "nome" }
                        ]
                    } );
            
            $('#codigo').change(function(){
                if( $(this).val() ) {                   
                    $.getJSON('getnome.php?search=',{codigo: $(this).val(), ajax: 'true'}, function(j){ 
                        for (var i = 0; i < j.length; i++) {
                            $("input[name='nome']").val(j[i].nome);
                        }
                    });
                }
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

$sqlp = "SELECT nome, id FROM profissionais WHERE tipo = 'CRM'";
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
                <form method="POST" onsubmit="return valida(this);" action="salvafichamedica.php" name="salvafichamedica" id="salvafichamedica">
                <div class="fichamedica">
                <div class="tab-control" data-role="tab-control">
                    <ul class="tabs">
                        <li class="active"><a href="#_page_1">Dados Pessoais</a></li>
                    </ul>
                    <div class="frames">
                        <div class="frame" id="_page_1">
                                 <label>Codigo</label>
                                 <table><tr>
                                 <td bgcolor="#FDFDFD">
                                    <div class="input-control text size2" id="divcodigo" data-role="input-control">
                                        <input type="text" id="codigo" name="codigo" placeholder="Codigo do Paciente">
                                    </div>
                                </td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                                <td bgcolor="#FDFDFD">
                                    <button id="buscarPaciente" class="image-button primary image-left">
                                        Buscar
                                        <i class="icon-search on-left" style="top: -3px; left: 7px">
                                        </i>
                                    </button>
                                </td> 
                            </tr></table>
                            <label>Nome</label>
                            <div class="input-control text" data-role="input-control">
                                <input type="text" id="nome" name="nome" disabled="disabled" placeholder="Nome do Paciente">
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