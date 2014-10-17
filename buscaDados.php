<?
session_start(); 
require_once ("validalogin.php");

//Requer conexão previa com o banco
require_once ("configs/conn.php");

if (isset($_GET["buscanome"])){
        $text = trim($_GET['buscanome']);
}else {if (isset($_POST["buscanome"])){
        $text = trim($_GET['buscanome']);
}};

$sql = "SELECT id, nome FROM pacientes WHERE nome LIKE '%$text%' ORDER BY nome ASC;";
$resultado = mysql_query($sql);

//Formatação do JSON
$json = '[';
$first = true;
while ($linhas = mysql_fetch_array($resultado)){
	if (!$first) { $json .=  ','; } else { $first = false; }
	$json .= '{"value":"'.utf8_encode($linhas['nome']).'"}';
}
$json .= ']';
echo $json;
?>