
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <h1>Programacion con PHP</h1>

        <h3>EJEMPLO USANDO IF AÑADIDO</h3>
        <br/>
        <form action="#" method="post" name="edades">
            <div>
                <label>Que edad tienes?</label>
                <input type="text" name="edad" id="edad"/>
                <input type="submit" name="edad" id="edad"/>
            </div>
            <div>

                <input type="contestar" name="contestar" id="edad" value="enviar"/>
            </div>

        </form>

        <div class="destacar">
            <?php
            if (isset($_POST["contestar"])) {
                if ($_POST["edad"] >= 18) {
                    echo"eres mayor de edad";
                } else {
                    echo"eres menor de edad";
                }
            }
            ?>
        </div>

<?php
// las variables siempre empiezan con ‘$’
$strHello = "Hello";

/* las líneas de código comentadas 
  pueden ocupar más
  de una línea */

print("$strHello World!<br/>");
// --------------------------------------------
// 
// print y echo 
print "Prueba de código<br/>";
echo "print y echo funcionan igual<br/>";
// --------------------------------------------
// 
echo "<h2 class=titulo>VARIABLES</h2>";

$strnombre = "Ludovic";
$strapellido = "Asdfgh";
$inttel = 34789456456;
$variable = "mi nombre es $strnombre";

echo $variable . "<br/>";
// --------------------------------------------
// 

echo 'la variable $variable '; //imprimo texto
echo "tiene el valor de: $variable <br/>"; //imprimo el valor de la variable
// --------------------------------------------
// 

echo "<h2>USO</h2>";
echo $strnombre . "<br/>", $strapellido . "<br/>", $inttel . "<br/>";
print "------------------ <br/>";
print $strnombre . "<br/>";
print $strapellido . "<br/>";
print $inttel . "<br/>";
print "------------------ <br/>";
echo "<br/>---------------------------<br/>";

print("<b>Hello</b> <i>World</i>: ");

echo "El nombre de la persona es " . $strnombre;
echo ". Su teléfono es: " . $inttel;
echo "<br/>---------------------------<br/>";
?>

        <h2 class="subapartado">Llamo a una función</h2>


<?php
// uso una función, le indico donde está definida la función
// include './servidor/funciones.php'; //la diferencia es que con include no se para la ejecución si encuentra error
require './servidor/funciones.php'; //el require, igual que el include, solo que si se pararía en caso de encontrar un error
sacaDatos();
?>

        <h2 id="testApartado">AMBITO DE VARIABLES</h2>
<?php
echo "La persona antigua se llamaba $strnombre" . "<br/>";
cambiaNombre();
echo "<br/>---------------------------";
echo "<br/>---------------------------";
echo ": llamo a una funcion no static" . incrementaVariableNoEstatica();
echo ": llamo a una funcion no static dos" . incrementaVariableNoEstatica();
echo ": llamo a una funcion no static tres" . incrementaVariableNoEstatica();
echo "<br/>---------------------------";
echo ": llamo a una funcion con STATIC" . incrementaVariableEstatica();
echo ": llamo a una funcion con STATIC por segunda vez" . incrementaVariableEstatica();
echo ": llamo a una funcion con STATIC por tercera" . incrementaVariableEstatica();
?>

        <h2>DISTINTAS FORMAS DE INSERTAR CÓDIGO EN PHP</h2>
<?php
echo 'ejemplo de una frase sencilla<br/>';
echo "<p>ejemplo de una frase sencilla</p><br/>";
echo "<p class='destacar'>ejemplo de una frase sencilla</p><br/>";
?>

        <h2>CONSTANTES</h2>
<?php
define("TASA_EURO_PESETA", 166.386);
echo "1 EUR vale " . TASA_EURO_PESETA . " pesetas <br/>";

//uso de constantes magicas
echo "<b>Fichero Actual:  </b>" . __FILE__ . "<br/>";
echo "<b>Linea de esta instruccion:  </b>" . __LINE__ . "<br/>";
echo "<b>Carpeta de Fichero Actual:  </b>" . __DIR__ . "<br/>";
?>


        <h2>TIPOS DE DATOS</h2>
<?php
/* HAY Cuatro TIPOS DE DATOS EN php:
 * 1- BOOLEANO
 * 2- STRING
 * 3- INTEGER
 * 4- FLOAT
 */

//no hace falta declarar que tipo de variable es
$number1 = 45;
$number2 = 45.88;
$number3 = "37";
$number4 = 0;
$number5 = 15;
//----------------------

if ($number4 == false) { //porque el number4 = 0, por eso es false, todo lo que no sea 0 es = TRUE
    echo "($number4) es igual a FALSE <br/>";
}
if ($number5 == true) {
    echo "($number5) es igual a TRUE <br/>";
}

//al no haberlo declarado antes, uso el number 3, que estaba escrito como string, pero al sumarle 1, se hace int (igual que en javascript)
$result = $number3 + 1;
echo "result = " . $result;
echo "---------------------<br>";


echo "<h3>USO: strcmp // strcasecmp </h3><br/>";

echo strcmp("Hello", "Hello"); //son iguales, devuelve 0
echo "<br>";
echo strcmp("Hello", "hELLo"); // no son iguales, devuelve -1 (con STRCMP, separa entre mayusculas y minisculas)
echo "<br>";
echo "---------------------<br>";
echo strcmp("Hello world!", "Hello world!"); // the two strings are equal
echo "<br>";
echo strcmp("Hello world!", "Hello"); // string1 is greater than string2
echo "<br>";
echo strcmp("Hello world!", "Hello world! Hello!"); // string1 is less than string2
echo "<br>";
echo "---------------------<br>";

$pais1 = "canada";
$pais2 = "CANADA";

$noEquals = strcmp($pais1, $pais2); // devuelve -1 o 1 si son distintos, y CERO si son iguales (tmb diferencia mayusc. de minusculas)
$noEqualsIgnoreCase = strcasecmp($pais1, $pais2); // igual, pero no tiene en cuenta las mayusculas
echo $noEquals . "<br/>";
if ($noEquals) {
    echo "Diferenciando entre MAYUSC y minisc: NO Coinciden <br/>";
} else {
    echo "Diferenciando entre MAYUSC y minusc: Coinciden <br/>";
}
//----------------------
echo $noEqualsIgnoreCase . "<br/>";
if ($noEqualsIgnoreCase) {
    echo "Sin diferenciar MAYUSC de minusc: NO Coinciden <br/>";
} else {
    echo "Sin diferenciar MAYUSC de minusc: Coinciden <br/>";
}
//echo $noEqualsIgnoreCase;
echo "---------------------<br>";
?>


        <h3>OPERACIONES</h3><br/>;
<?php
$edadSujeto1 = 18;
$edadSujeto2 = 44;
$edadSujeto3 = 56;
$edadSujeto4 = 11;

$suma = $edadSujeto1 + $edadSujeto2 + $edadSujeto3 + $edadSujeto4;
echo "El total de la suma de todas las edades es = " . $suma . "<br/>";

$media = $suma / 4;
echo "la media de edad es = " . $media . "<br/>";
echo "<h3> </h3><br/>";
$calculo = 0;
$calculo += $edadSujeto1;
echo "---------------------<br>";
?>

        <h2>OPERADOR TERNARIO</h2><br/>
<?php
//si calculo existe, seria igual a la edadSujeto1 + 1, PERO si no existe, sería = 0
// $variable = condicion ? verdadero : falso;
$calculo = isset($calculo) ? $calculo += $edadSujeto1 : 0;
echo $calculo
?>


        <h2>CASTING / CONVERSIÓN de tipos de variables</h2><br/>
<?php
echo "<h4>El IMPLICITO E</h4><br/>";
echo 'el valor de  $number3 es ' . $number3;
echo " y su tipo de dato es " . gettype($number3) . "<br/>";
echo "---------------------<br>";
$number3 *= 2;
echo 'el valor de  $number3 es ' . $number3;
echo " y su tipo de dato es " . gettype($number3) . "<br/>";
echo "---------------------<br>";
$number3 /= 7;
echo 'el valor de  $number3 es ' . $number3;
echo " y su tipo de dato es " . gettype($number3) . "<br/>";
echo "---------------------<br>";

echo "<h4>EXPLICITO</h4><br/>";
?>

        <h2>FUNCIONES MATEMATICAS</h2><br/>
<?php
$base = 3;
$aleatorio = rand(2, 50); //saca numeros entre 2 y 50 solo
echo "el numero aleatorio generado es: " . $aleatorio;
echo "<br>---------------------<br>";

$cubico = pow($aleatorio, $base);
$cubico2 = $aleatorio ** $base; // con php 5 no funciona, es otra manera de hacer lo mismo que con POW      
echo $cubico . "  " . $cubico2;

echo "<br>---------------------<br>";
$raiz = sqrt($aleatorio);
echo "la raiz es = " . $raiz;

$redondeadoInf = round($raiz);
$redondeadoSup = ceil($raiz);
echo "redondeando al Inferior = " . $redondeadoInf . "  y al superior = " . $redondeadoSup;
?>

        <h2>OPERADORES DE COMPARACION</h2><br/>
<?php
$var1 = 7;
$var2 = "7";
$var3 = "G";
$var4 = 8;


$salida = ($var1 === $var2) ? "Con == son iguales <br/>" : "Con == no son iguales <br/>";

echo $salida;

if ($var1 == $var2) {
    echo "Con == son iguales <br/>";
} else {
    "Con == no son iguales<br/>";
}
?>


    </body>
</html>
