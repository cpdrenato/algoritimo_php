<!DOCTYPE html>
<html>
<body>
 
<?php  
    $cores = array("azul", "vermelho", "amarelo", "verde"); 
 
    foreach ($cores as $value) {
        echo "$value <br>";
    }
?>  
<br>
<h2>PHP Foreach utilizando $key</h2> 
<br>
<?php 
    $cores = array("Azul","Amarelo","Vermelho","Rosa","Verde");
    foreach ($cores as $key => $value) { 
        echo "Minha cor no indice ".$key." é ".$value."<br/>";
    }
?> 
<br>
<h3>Portanto, agora que já entendemos como funciona, isso nos permite também trabalhar com arrays que possuam chaves personalizadas</h3> 
<br>

<?php 
    $cores = array("chave01"=>"Azul","Amarelo","Vermelho");
    foreach ($cores as $key => $value) { 
        echo  $key." => ".$value."<br/>";
    }
?>
<br>
<?php 
    $arr = array(
        "nome"=>"Roberto",
        "sobrenome"=>"Junior",
        "idade"=> 23,);
    foreach ($arr as $key => $value) { 
        echo  $key." => ".$value."<br/>";
    }
?>
<br>
<h3>tabela de forma dinâmica</h3> 
<br>
<table border="1">
    <?php 
        $tabela = array
          (
            array("Nome","Sobrenome","Idade"),
            array("Rafael","Filho","25"),
            array("Lucas","Junior","32"),
            array("Maria","Eduarda","27"),
          );
          foreach ($tabela as $key => $value) {
            echo "<tr>";
             foreach ($tabela[$key] as $cedula){
                echo "<td>".$cedula."</td>";
             };
             echo "</tr>";
         }
        
    ?>
</table>     
 
</body>
</html>