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
echo "Hola" . $palabra . $palabra2;

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



