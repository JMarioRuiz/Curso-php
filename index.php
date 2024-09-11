

<br>
<?php
$nombre="hola mundo";
const escuela = "Niños heroes";
define("direccion", "avenida alegria");
$edad = 10;
$promedio = 9.5;
$esAlumno = false;
$Nombre = "MARIO";

$numero = "20";
$numero2 = 10;
$suma = $numero + $numero2;
echo $suma;

echo $nombre, " ", direccion;

$apellido = substr("Marines Mendez",8,);
echo $apellido;

$bienvenida = "Bienvenido al mundo de la programacion";
$palabra = "programacion";

$buscar = strpos($bienvenida, $palabra);
$extracion = substr($bienvenida,$buscar);
echo $extracion;

$RFC = "91 75 1A EC C7";
$buscar = " ";
$remplazar = ";";

$resultado = str_replace($buscar,$remplazar,$RFC);
echo $resultado;

$anio = "1994";
$mes = "01";
$dia = "21";
$formato = "%s-%s-%s";

echo sprintf($formato,$dia,$mes,$anio);
?>