<h3 style="color:green;">ALGORITIMOS COM PHP</h3>
<h1 style="color: #eee;">Continuacao!</h1>
<h3>***************************************************************************</h3>
<h3>calculo de eleitores</h3>
<form method="post">
    <label>Total de eleitores:</label>
    <input name="eleitores">
    <label>Votos nulos:</label>
    <input name="nulos">
    <label>Votos validos:</label>
    <input name="validos">
    <button type="submit">Enviar</button>
</form>

<?php
$eleitores = isset($_POST['eleitores']) ? $_POST['eleitores'] : 0;
$nulos = isset($_POST['nulos']) ? $_POST['nulos'] : 0;
$validos = isset($_POST['validos']) ? $_POST['validos'] : 0;
$percentual_nulos = ($nulos * 100) / $eleitores;
$percentual_validos = ($validos * 100) / $eleitores;
echo 'Total de eleitores: ' . $eleitores . '<br/>';
echo 'Percentual de votos nulos: ' . $percentual_nulos . '%<br/>';
echo 'Percentual de votos validos: ' . $percentual_validos . '%';
?>
<h3>***************************************************************************</h3>
<h3>salario</h3>
<form method="post">
    <label>Salario atual:</label>
    <input name="salario_atual">
    <label>Percentual de reajuste:</label>
    <input name="percentual_reajuste">
    <button type="submit">Enviar</button>
</form>

<?php
$salario_atual       = isset($_POST['salario_atual']) ? $_POST['salario_atual'] : 0;
$percentual_reajuste = isset($_POST['percentual_reajuste']) ? $_POST['percentual_reajuste'] : 0;
$novo_salario = (($salario_atual * $percentual_reajuste) / 100) + $salario_atual;
echo 'Salario atual: R$ ' . $salario_atual . '<br/>';
echo 'Percentual de reajuste: ' . $percentual_reajuste . '%<br/>';
echo 'Novo salario: R$ ' . $novo_salario;
?>
<h3>***************************************************************************</h3>
<h3>Custo de fabrica e porcentuais</h3>
Custo de fabrica e porcentuais
<form method="post">
    <label>Custo de fabrica:</label>
    <input name="custo_fabrica">
    <button type="submit">Enviar</button>
</form>

<?php
$percentual_distribuidor = 28;
$percentual_impostos = 45;
$custo_fabrica = isset($_POST['custo_fabrica']) ? $_POST['custo_fabrica'] : 0;
$valor_distribuidor = ($custo_fabrica * $percentual_distribuidor) / 100;
$valor_impostos     = ($custo_fabrica * $percentual_impostos) / 100;
$custo_final = $custo_fabrica + ($valor_distribuidor + $valor_impostos);
echo 'Custo de fabrica: R$ ' . $custo_fabrica . '<br/>';
echo 'Custo final: ' . $custo_final;
?>
<h3>***************************************************************************</h3>
<h3>venda de carros</h3>
<form method="post">
    <label>Carros vendidos:</label>
    <input name="carros_vendidos">
    <label>Salario fixo:</label>
    <input name="salario_fixo">
    <label>Valor das vendas:</label>
    <input name="valor_vendas">
    <label>Comissão por carro:</label>
    <input name="comissao_carro">
    <button type="submit">Enviar</button>
</form>

<?php
$carros_vendidos = isset($_POST['carros_vendidos']) ? $_POST['carros_vendidos'] : 0;
$salario_fixo    = isset($_POST['salario_fixo']) ? $_POST['salario_fixo'] : 0;
$valor_vendas    = isset($_POST['valor_vendas']) ? $_POST['valor_vendas'] : 0;
$comissao_carro  = isset($_POST['comissao_carro']) ? $_POST['comissao_carro'] : 0;
$salario_final = $salario_fixo + ($carros_vendidos * $comissao_carro);
$salario_final += ($valor_vendas * 5) / 100;
echo 'Salário final: R$ ' . $salario_final . '<br/>';
?>
<h3>***************************************************************************</h3>
<h3>Numero comparado qual maior</h3>
<form method="post">
    <label>Numero:</label>
    <input name="numero">
    <button type="submit">Enviar</button>
</form>

<?php
$numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
if ($numero > 10){
	echo 'E maior que 10';
}else{
	echo 'Nao e maior que 10';
}?>
<h3>***************************************************************************</h3>
<h3>Positivo ou negativo</h3>

<form method="post">
    <label>Numero:</label>
    <input name="numero">
    <button type="submit">Enviar</button>
</form>

<?php
$numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
if ($numero >= 0){
	echo 'Positivo';
}else{
	echo 'Negativo';
}?>
<h3>***************************************************************************</h3>

<a href="alg1.php">anterior</a>
<h3>***************************************************************************</h3>
<h4 style="color:blue;">Altor: Renato Lucena - 2017</h4>

<!--
<?php
echo "trocar variavel com A=10 e B=20<br>";
$a = 10;
$b = 20;
$temp = 0;
$temp = $a;
$a = $b;
$b = $temp;
echo "Variavel A: $a e Variavel B: $b";
exit;
?> -->
