<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

print_r('**************************************************************************');

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

print_r('**************************************************************************' . '<br>');

$jogo = array
(
    array(1, "Zé", 11),
    array(2, "José", 4),
    array(3, "Zéca", 22)
);

for ($linha=0; $linha<3; $linha++) {
    for ($coluna=0; $coluna<3; $coluna++) {
        echo $jogo[$linha][$coluna]."  ";
    }
    echo "<br/> \n";
}
print_r('**************************************************************************' . '<br>');

print_r('ARRAYS MULTIDIMENSIONAIS CONTENDO ESTRUTURAS DE DADOS' . '<br>');

$x = [
  "array1" => [
      "aaa"=>100,
      "bbb"=>200,
      "ccc"=>300
  ],
  "array2" => [
      "ddd"=>500,
      "eee"=>600,
      "fff"=>700
  ]
];

echo $x["array"]["bbb"];
print_r('**************************************************************************' . '<br>');

$jogo = [
  ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11],
  ["ID"=>2, "NOME"=>"José", "PONTOS"=>4],
  ["ID"=>3, "NOME"=>"Zéca", "PONTOS"=>22]
];
print_r($jogo);

echo $jogo[1]["NOME"];
