<!-- 1- Elaborar um programa que apresente como resultado o valor de uma potência de base

qualquer elevada a um expoente qualquer, ou seja, de Be, em que B é o valor da base e E o

valor do expoente. Considere apenas a entrada de valores inteiros e positivos (proibido o uso da função pow()).

2 - Elaborar um programa que apresente os valores de conversão de graus Celsius em

Fahrenheit, de 10 em 10 graus, iniciando a contagem em 10 graus Celsius e finalizando em

100 graus Celsius. O programa deverá apresentar os valores das duas temperaturas. -->
<h3 style="color:green;">ALGORITIMOS COM PHP</h3>
<h1 style="color: #eee;">Hello world!</h1>

<?php
echo "<br>";
echo "1- Elaborar um programa que apresente como resultado o valor de uma potência de base<br>
qualquer elevada a um expoente qualquer, ou seja, de Be, em que B é o valor da base e E o valor <br>do expoente. Considere apenas a entrada de valores inteiros e positivos (proibido o uso da função pow()).<br><br>";
$var_numero   = 2;
$var_potencia = 3;

$soma_geral   = 1;
for ($n = 0; $n < $var_potencia; $n++) {
 $soma_geral  *= $var_numero;

}

echo $soma_geral;
echo "<br>";
var_dump(pow($var_numero, $var_potencia)); // Conferencia!
?>
<h3>***************************************************************************</h3>
<?php
echo "<br><br>";
echo "2 - Elaborar um programa que apresente os valores de conversão de graus Celsius em<br>

Fahrenheit, de 10 em 10 graus, iniciando a contagem em 10 graus Celsius e finalizando em<br>

100 graus Celsius. O programa deverá apresentar os valores das duas temperaturas.<br><br>";

for ($c = 1; $c <= 10; $c++) {
 $temperatura_atual = ($c * 10);
 $convesao_temperatura = ((212-32)/100 * $temperatura_atual + 32);

 echo "Celsius: $temperatura_atual / Fahrenheit: $convesao_temperatura<br>";
}
?>
<!--Renato de Oliveira Lucena-->
<h3>***************************************************************************</h3>
<!--Calculando o número PI - Durante os testes, obtive o valor de 3.1415183141518-->

<?php
echo "<br><br>";
echo "Calculando o número PI<br>";

$dentro = 0; // número de pontos que caíram dentro do círculo
$amostras = 99999; // número de simulações que serão realizadas

for($x = 0; $x < $amostras; $x++){
if(hypot(lcg_value(), lcg_value()) < 1){ // nosso intervalo dos números aleatórios gerado pela função lcg_value é de [0, 1], logo, a aplicação da norma também será < 1
// não há problemas em utilizarmos um intervalo maior com lcg_value()*2, porém nosso 1 também iria aumentar, em referência ao R da circunferência
$dentro++;
}
}
echo (4*$dentro/$amostras);
?>
<h3>***************************************************************************</h3>
<!--Calculo da área de uma circunferência-->
<?php
  echo "<br><br>Calculo da área de uma circunferência<br>";
	$raio = empty($_POST['raio'])
	             ? 1
	             : $_POST['raio'];

	$area = 4 * pi() * ($raio * $raio);
	$volume = 4/3 * pi() * ($raio * $raio * $raio);

	echo "Resultado do c&aacutelculo<p>";
	echo "Resultado da &Aacuterea:".number_format($area,2,',','.')."<br>";
	echo "Resultado do volume:".number_format($volume,2,',','.');
  ?>
  <h3>***************************************************************************</h3>
<h3>calculo da idade em anos e meses e dias</h3>
  <form method="post">
    <label>Idade em anos:</label>
    <input name="anos">
    <label>meses:</label>
    <input name="meses">
    <label>dias:</label>
    <input name="dias">
    <button type="submit">Enviar</button>
</form>

<?php
$anos = isset($_POST['anos']) ? $_POST['anos'] : 0;
$meses = isset($_POST['meses']) ? $_POST['meses'] :0;
$dias = isset($_POST['dias']) ? $_POST['meses'] :0;
$total = ($anos*365) + ($meses*30) + $dias;
echo 'Idade em dias: '.$total;

?>

<h3>***************************************************************************</h3>
<a href="alg2.php">proxima</a>
<h4 style="color:blue;">Altor: Renato Lucena - 2017</h4>
