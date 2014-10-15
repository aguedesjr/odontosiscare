<!-- INCLUI O INICIO DO ARQUIVO -->
<? include ("header.php"); ?>

<? $login = $_SESSION['login']; ?>

<!-- INICIO DO ARQUIVO -->
<body class="metro">
    
    <br>
    
    <!--<input type="image" src="imagens/photo1.jpg" />-->
    <img src="imagens/photo1.jpg" />
    
    <center><img src="imagens/principal1.png" /></center>
    <br><br>
    
    <div class="grid">
        <div class="row">
    
            <? include ("menu.php"); ?>
            
            <br>
            <div class="span5"></div>
            <? echo ($login); ?>
            
        </div>
    </div>

</body>
<!-- FIM DO ARQUIVO -->

<!-- INCLUI O FIM DO ARQUIVO -->
<? include ("footer.php"); ?>