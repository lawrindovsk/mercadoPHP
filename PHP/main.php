<?php
 require_once('Cliente.php');
 require_once('Funcionario.php');
 require_once('Produto.php');
 
 $client = new Cliente("Gustavo Laurindo","2023-01-10","papel higienico","2 unidades","20");
 echo $client;

 echo "<br><br>";

 $client1 = new Funcionario(120,"gyovanna","1126320323","F","Rua bifonte allan ",1300);
 echo $client1;

 echo "<br><br>";

 $produto = new Produto("pao frances",300,"2030-12-20",10);
 echo $estoProdu;

 echo "<br><br>";



?>