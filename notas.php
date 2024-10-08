VARIABLES
las variables no pueden comenzar con numeros, siempre debe ser con caracteres,
no pueden llevar espacios las variables.
no es lo mismo la variable en minuscula que mayuscula $nombre y $Nombre son variables distintas

las constantes son variables que nunca cambian de valor, es un valor fijo.

define
tambien sirve para crear una constantes

CONVERSIONES
php hace conversiones automaticas de manera implicita en muchos casos.
con el comando echogettype() se podra determinar que tipo de variable es.
para convertir un tipo de variable a otra seria el tipo de valor y al final agregar val antes del valor a guardar
ejemplo strval(); es para convertir una variable a string, estamos forzando que el tipo del dato sea string.

CONCATENACION
para los string se utiliza punto para contatenarlos.
echo "Hola" . $palabra . $palabra2; 0

INTERPOLACION
seria agregar un string dentro de otro string
echo "Hola $palabra palabra2"
para que no se interpongan las variables, se encierran con llaves cada variable
echo "Hola {palabra}Facilito ";

COMILLAS DOBLES Y SIMPLES
con las comillas dobles se puede hacer la interpolacion,
con las comillas simples no se puede hacer la interpolacion,

con \ se utiliza para agrgar otras comillas del mismo tipo para hacer enfasis en un texto
con \ se utiliza para agrgar otras comillas del mismo tipo para hacer enfasis en un texto
con \ se utiliza para agrgar otras comillas del mismo tipocu para hacer enfasis en un texto
echo "\"Eres una mala persona\" dijo el amigo"

HEREDOC Y NOWDOC
Sirven para crear texto complejos para imprimir en pantalla

Con Heredoc si se pueden agregar variables al texto, logica parecida a las comillas dobles
<<< Frase
$saludo
No cuentes los dias, haz que los dias cuenten
Frase;

Con Nowdoc la logica es parecida a las comillas simples.
<<<'Frase'
la sintaxis es la misma que Heredoc pero debes agregar las comillas simples

EXTRAER Y BUSCAR PALABRAS EN UNA CADENA V2
el comando substr("Marines Mendez",8,) sirve para subextraer un string en una cadena.
en el tercer argumento si es positivo es la posicion de la letra y si es negativo es extraer los ultimos caracteres de la cadena.

el comando strpos(), sirve para obtener la posicion de un string dentro de una cadena

REEMPLAZAR Y FORMATO V2
con el comando remplace(), nos permitirar una palabra o caracter dentro de un string

OPERADORES
Un operador es un simbolo que opera en ciertos tipos de datos y produce
la salida como resultado de la operacion.

ternario
$condicion ? 'true' : false;

operador igual == compara el valor de 2 datos
operador identico === ademas de comparar los 2 datos, tambien es comparar el tipo de dato
operador diferente != es lo contrario del signo igual ==
operador diferente <>
operador no identico !== es el contario del operador identico
mayor que >
mayor igual que >=
menor que <
menor igual que <=

operador de nave espacial <=>
0 ambos valores son iguales
-1 el valor es menor
1 el valor es mayor

OPERADORES ARITMETICOS
operador identidad +
operador de negacion -
operador adicion +
operador substracion -
operador multiplicacion *
operador division /
operador modulo % nos dara como resultado el residuo de una division
operador exponenciacion ** es para elevar un numero en exponente

OPERADORES DE ASIGNACION
operadores de asignacion =
operador de asignacion por referencia = &$variable, es para que siempre se asigne el valor aun cuando
mas adelante el valor de la variable cambie de valor
operador de asignacion para concatenar .= es para concatenar valores de strings 
operador += es para aumentar el valor de una variable que ya tiene un valor asignado
tambien aplica con los operadore de **, / , - , %

OPERADORES LOGICOS
operador and o &&
operador or o ||
operador xor verifica que uno de los valores sean verdadero pero no ambos
operador not o ! verifica que un valor no sea verdadero

OPERADORES INCREMENTO Y DECREMENTO
operador pre-incremento ++$variable, suma el valor + 1 y luego regresa el valor
operador pos-incremento $variable++, regresa el valor y luego suma el valor + 1
operador pre-decremento --$variable, resta el valor - 1 y luego regresa el valor
operador pos-decremento $variable--, regresa el valor y luego resta el valor - 1

OPERADOR TERNRIO, ELVIS Y FUSION NULL
operador ternario (Operando)?Operando:Operando
operador elvis ?: sirve para verificar si existe un dato o no en la variable
$aprobo = ($promedio)?:5;
operandor fusion null ??
$aprobo = ($promedio)??5;

IF
<?
if ($condicion) {
    # code...
} else if ($condition) {

}
else {
    # code...
}

?>

SWITCH
<?
switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}
?>

MATCH V8
<?
echo match (expression) {
    'gris' => 'es una camisa gris',
    'rojo' => 'es una camisa roja',
};
?>

WHILE
<?
while ($a <= 10) {
    # code...
    ++$a;
}
?>

DO WHILE
<?
do {
    # code...
    ++$a;
} while ($a <= 10);
?>

FOR
<?
for ($i=0; $i < 10; $i++) { 
    # code...
}
?>

FOREACH
<?
$array = ['Cris', 'Leon', 'Ada'];
$nombre = 'Ada';
foreach ($array as $nombre) { 
    # code...
}
?>

ARREGLOS
un arreglo es una coleccion ordenada de datos. Los arreglos se emplean para almacenar
multiples valores en una sola variable.
<?
$array = ['Cris', 'Leon', 'Ada'];
echo $array[1];
foreach ($array as $index => $nombre) {
    # code...
}
?>

ARREGLOS ASOCIATIVOS
<?
$alumnos = ['Cris', 'Leon', 'Ada'];
$datos = [
    'nombre' => 'Leon',
    'apellido' => 'Mendez',
    'edad' => '29'
];
//agregar un dato
array_push($alumnos,'Luis');
$datos['Colonia'] = 'Alegria';
//eliminar un dato
unset($alumnos[1]);
unset($datos['apellido']);
//modificar un dato
$alumnos[1] = 'León';
$datos['apellido'] = 'Mendes';
//funciones para arreglos
//count() sirve para contar cuantos elementos hay dentro de un arreglo
//asort() acomoda el arreglo de manera alfabeticamente o de manera ascendente
//arsort() acomodo el arreglo de manera al revez alfabeticamente o de manera descendente
//array_search("valor", $arreglo) es para buscar un valor dentro de arreglo
//array_replace() es para remplazar un datos de un arreglo
$alumnosCorrecion = array_replace($alumnos,[
    0=>"Laura",
    1=>'Jose',
])
?>

ARREGLOS MULTIDIMENCIONALES
los arreglos multidimencionales son muy poderosos porque permiten que aun mas informacion
sea almacenada en una variable, convirtiendo en portables a inmensos conjuntos de datos
<?
$animales = [
"Felinos" => ["puma","jaguar","lince"],
"Aves" => ["paloma","pato","tucan"],
"Reptiles" => ["serpiente","cocodrilo","tortuga"]
];
echo $animales[2][1];
//recorrer un arreglo multidimensional
foreach ($animales as $key => $clasificacion) {
    foreach ($clasificacion as $animal) {
        echo "$key: $animal ";
    }
}
?>

FUNCIONES
<?
$anio = 1994;
//declarar tipo estricto, es para que las funiones acepten valores de su mismo tipo
declare(strict_types=1);
function obtenerEdad(int $anio,int $añoActual=2023){
    $edad = $añoActual - $anio;
    return $edad;
}
$edad = obtenerEdad(1994);
echo "Mi edad es: $edad"; 
//funcion anonima
$mensaje = "La suma es: ";
$suma = function ($numero1,$numero2) use ($mensaje){
    $resultado = $numero1+$numero2;
    return "$mensaje $resultado";
};
echo "La suma es ",$suma();
?>
