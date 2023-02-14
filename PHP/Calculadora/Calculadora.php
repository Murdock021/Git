<?php

$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$num03 = filter_input(INPUT_POST, "txtNumero3");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";

if($num01  && $num02){
  switch($opera){
    case "+":
      $resul = ($num01 + $num02 + $num03);
    break;
    case "-":
      $resul = ($num01 - $num02 - $num03);
    break;
    case "*":
      $resul = ($num01 * $num02 * $num03);
    break;
    case "/":
      $resul = ($num01 / $num02 / $num03);
    break;
  }
}

?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
    <head>
     <meta charset="utf-8">
     <link href="css/style.css" type="text/css" rel="stylesheet" /> 
     <title>Operações</title>
     <style>
      input, select{padding:10px; margin: 5px;}
     </style>
    </head>
   <body>
     <h1>Calculadora</h1>
     <h1><?=$resul;?></h1>
     <form method="post">
       <label>Número 1: <input type="text" name="txtNumero1"/></label><br>
       <label>Número 2: <input type="text" name="txtNumero2"/></label><br>
       <label>Número 3: <input type="text" name="txtNumero3"/></label><br>
       <label>Operação:
         <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>          
         </select>
       </label><br>
       <input type="submit" name="Calcular" value="Calcular">
     </form>
   </body>
 </html>
