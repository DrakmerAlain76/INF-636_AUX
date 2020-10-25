<?php


// var_dump(isset($_GET['num1'])&isset($_GET['num2']));
// // var_dump($_GET['num2']);
// die();

if(isset($_GET['num1'])&&isset($_GET['num2'])){
  $num1=$_GET['num1'];
  $num2=$_GET['num2'];
  // echo "<h4>calcular $num1 y $num2<4/>";

}else{
//echo "<p> no hay numeros <p/>";
}

echo "<h4>$num1 + $num2 = ".($num1+$num2)."<h4/>";
echo "<h4>$num1 - $num2 = ".($num1-$num2)."<h4/>";
echo "<h4>$num1 * $num2 = ".($num1*$num2)."<h4/>";
echo "<h4>$num1 / $num2 = ".($num1/$num2)."<h4/>";


 ?>
