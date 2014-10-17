<!-- INCLUI O INICIO DO ARQUIVO -->
<? include ("header.php"); ?>

<script src="js/jquery-ui.min.js" type="text/javascript"></script> <!-- SCRIPT AUTOCOMPLETE -->

    <script type="text/javascript">
            $(document).ready(function(){
            $.ajax({
               url: 'buscaDados.php',
               type: 'POST',
               dataType: 'json',
               success: function(data){
                     $('#buscanome').autocomplete(
                     {
                           delay: 0,
                           source: data,
                           minLength: 2
                     });
               }
          });
    });
    </script>
    <style>
        .ui-helper-hidden-accessible {display: none; }
    </style>

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
                <form method="POST" action="salvapacientebd.php" name="salvapaciente">
                <div class="editpaciente">
                <div class="tab-control" data-role="tab-control">
                    <ul class="tabs">
                        <li class="active"><a href="#_page_1">Dados Pessoais</a></li>                        
                    </ul>
                    <div class="frames">
                        <div class="frame" id="_page_1">
                            <label>Nome</label>
                            <div class="input-control text" data-role="input-control">
                                <input type="text" id="buscanome" name="buscanome" placeholder="Nome do Paciente">
                            </div>
                            
                            <center>
                                <input type="submit" class="button bg-darkBlue fg-white" value="Salvar" />
                                <input type="reset" class="button bg-darkRed fg-white" value="Limpar" />
                                
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