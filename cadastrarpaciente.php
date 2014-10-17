<!-- INCLUI O INICIO DO ARQUIVO -->
<? include ("header.php"); ?>

<script src="js/cep.js" type="text/javascript"></script> <!-- SCRIPT CEP -->
<script src="js/jquery.maskedinput.js" type="text/javascript"></script> <!-- SCRIPT MASK -->

    <script>
        $(function() {
            jQuery(function($){
                $("#tel").mask("(99) 9999-9999");
                $("#cel").mask("(99) 99999-9999");
                $("#cep").mask("99999-999");
                $("#cpf").mask("999.999.999-99");
                $("#data").mask("99/99/9999");
            });
        });
    </script>

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
                <div class="cadpaciente">
                <div class="tab-control" data-role="tab-control">
                    <ul class="tabs">
                        <li class="active"><a href="#_page_1">Dados Pessoais</a></li>
                        <li><a href="#_page_2">Endereço</a></li>
                    </ul>
                    <div class="frames">
                        <div class="frame" id="_page_1">
                            <label>Nome</label>
                            <div class="input-control text" data-role="input-control">
                                <input type="text" id="nome" name="nome" placeholder="Nome do Paciente">
                            </div>
                            <table><tr>
                            <td bgcolor="#FDFDFD">
                                <label>CPF</label>
                                <div class="input-control text size2" data-role="input-control">
                                    <input type="text" id="cpf" name="cpf" maxlength="14" placeholder="Informe o CPF">
                                </div>
                            </td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                            <td bgcolor="#FDFDFD">
                                <label>Data Nasc.</label>
                                <div class="input-control text size2" data-role="input-control">
                                    <input type="text" id="data" name="data" placeholder="Data">
                                </div></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                                <td bgcolor="#FDFDFD">
                                <label>Matricula</label>
                                <div class="input-control text size3" data-role="input-control">
                                    <input type="text" id="matricula" name="matricula" placeholder="Matricula">
                                </div></td>
                            </tr></table>
                            <table><tr>
                                <td bgcolor="#FDFDFD">
                                    <label>Telefone</label>
                                    <div class="input-control text size3" data-role="input-control">
                                        <input type="text" id="tel" name="tel" placeholder="Telefone">
                                    </div>
                                </td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                                <td bgcolor="#FDFDFD">
                                    <label>Celular</label>
                                    <div class="input-control text size3" data-role="input-control">
                                        <input type="text" id="cel" name="cel" placeholder="Celular">
                                    </div>
                                </td> 
                            </tr></table>
                            <center>
                                <input type="submit" class="button bg-darkBlue fg-white" value="Salvar" />
                                <input type="reset" class="button bg-darkRed fg-white" value="Limpar" />
                                
                            </center>
                        </div>
                        <div class="frame" id="_page_2">
                            <table><tr>
                            <td bgcolor="#FDFDFD">
                                <label>CEP</label>
                                <div class="input-control text size2" data-role="input-control">
                                    <input type="text" id="cep" name="cep" maxlength="9" placeholder="Informe o CEP">
                                </div>
                            </td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                            <td bgcolor="#FDFDFD">
                                <label>Bairro</label>
                                <div class="input-control text size4" data-role="input-control">
                                    <input type="text" id="bairro" name="bairro" placeholder="Bairro">
                                </div></td>
                            </tr></table>
                            <label>Rua</label>
                            <div class="input-control text size6" data-role="input-control">
                                <input type="text" id="rua" name="rua" placeholder="Nome da Rua / Logradouro">
                            </div>
                            <table><tr>
                                <td bgcolor="#FDFDFD">
                                    <label>Cidade</label>
                                    <div class="input-control text size5" data-role="input-control">
                                        <input type="text" id="cidade" name="cidade" placeholder="Cidade">
                                    </div>
                                </td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td><td bgcolor="#FDFDFD"></td>
                                <td bgcolor="#FDFDFD">
                                    <label>UF</label>
                                    <div class="input-control text size1" data-role="input-control">
                                        <input type="text" id="estado" name="estado" placeholder="Estado">
                                    </div>
                                </td> 
                            </tr></table>
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