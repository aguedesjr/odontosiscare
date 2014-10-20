<!-- INCLUI O INICIO DO ARQUIVO -->
<? include ("header.php"); ?>

<!-- <script src="js/jquery-ui.min.js" type="text/javascript"></script>  SCRIPT AUTOCOMPLETE -->
<script src="js/jquery.maskedinput.js" type="text/javascript"></script> <!-- SCRIPT MASK -->

    <script>
        $(function() {
            jQuery(function($){
                $("#cpf").mask("999.999.999-99");
            });
        });
        
        function valida(form) {
                        
            var str = document.getElementById("cpf").value;
            
            if (form.cpf.value=="") {
                alert("CPF não informado!!");
                document.getElementById("divcpf").className = "input-control text error-state";
                form.cpf.focus();
                return false;
            } else {
                str = str.replace('.','');
                str = str.replace('.','');
                str = str.replace('-','');
                cpf = str;
                var numeros, digitos, soma, i, resultado, digitos_iguais;
                digitos_iguais = 1;
                if (cpf.length < 11) {
                      alert("CPF invalido!!");
                      document.getElementById("divcpf").className = "input-control text error-state";
                      form.cpf.focus();
                      return false;
                }
                for (i = 0; i < cpf.length - 1; i++)
                      if (cpf.charAt(i) != cpf.charAt(i + 1))
                            {
                            digitos_iguais = 0;
                            //alert("CPF invalido!!");
                            document.getElementById("divcpf").className = "input-control text error-state";
                            form.cpf.focus();
                            break;
                            }
                if (!digitos_iguais)
                      {
                      numeros = cpf.substring(0,9);
                      digitos = cpf.substring(9);
                      soma = 0;
                      for (i = 10; i > 1; i--)
                            soma += numeros.charAt(10 - i) * i;
                      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                      if (resultado != digitos.charAt(0)) {
                            alert("CPF invalido!!");
                            document.getElementById("divcpf").className = "input-control text error-state";
                            form.cpf.focus();
                            return false;
                      }
                      numeros = cpf.substring(0,10);
                      soma = 0;
                      for (i = 11; i > 1; i--)
                            soma += numeros.charAt(11 - i) * i;
                      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                      if (resultado != digitos.charAt(1)){
                            alert("CPF invalido!!");
                            document.getElementById("divcpf").className = "input-control text error-state";
                            form.cpf.focus();
                            return false;
                        }
                      document.getElementById("divcpf").className = "input-control text";
                      return true;
                      }
                else {
                    alert("CPF invalido!!");
                    document.getElementById("divcpf").className = "input-control text error-state";
                    form.cpf.focus();
                    return false;
                }
                
            }
       };
        
    </script>


    <!--<script type="text/javascript">
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
    </script>-->
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
                <form method="POST" onsubmit="return valida(this);" action="excluirpaciente.php" name="editarpaciente">
                <div class="buscapaciente">
                <div class="tab-control" data-role="tab-control">
                    <ul class="tabs">
                        <li class="active"><a href="#_page_1">Buscar Dados</a></li>                        
                    </ul>
                    <div class="frames">
                        <div class="frame" id="_page_1">
                            <label>CPF</label>
                            <div class="input-control text" id="divcpf" data-role="input-control">
                                <input type="text" id="cpf" name="cpf" placeholder="CPF do Paciente">
                            </div>
                            
                            <center>
                                <input type="submit" class="button bg-darkBlue fg-white" value="Enviar" />
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