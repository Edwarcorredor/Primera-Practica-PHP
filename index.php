<?php
  /**
   **Se tiene que dividir por carpetas los tipos de archivos para tener un orden en el proyecto
  */
  /**
   * TODO: 6 Funciones de salida
  */
  echo 5;
  /**
   * * echo imprime contenido
  */ 
  $texto = "Mundo ";
  printf("Hola %s ", $texto);
  /**
   * *$variable se usa para definir variables
   * *printf otra forma de imprimir contenido usando un tipo de template string de js
  */ 
  $mensaje = sprintf("Hola %s ", $texto);
  /**
   **sprintf Se comporta parecido a un template string 
  */ 
  var_dump($mensaje);
  /**
   * *var_dump se usa para imprimir el contenido y la estructura del dato
  */
  /**
   *TODO:7 Variables y constantes 
  */

  $nombre = (string) "Edwar";
  /**
   * *$variable = (tipo) se usa para definir variables y decir estrictamente su tipo de dato
  */

  define("MENSAJE","mundo");
  printf("%s %s ",$mensaje, MENSAJE);
  /**
   **define se usa para crear constantes 
  */
  
  /**
   *TODO:8 Tipos de datos
  */

  $logueado = true;
  var_dump($logueado);

  /**
   * *Booleanos (bool): se utilizan para almacenar valores de    verdad o falsedad, que se representan por true o false  
  */

  $numero = 200;
  var_dump($numero);
  /**
   * *Enteros (int): se utilizan para almacenar números enteros sin decimales
  */

  $float = 200.5;
  var_dump($float);
  /**
   * *Punto flotante (float): se utilizan para almacenar números con decimales.
  */

  $nombre = "Edwar";
  var_dump($nombre);
  /**
   * *Cadenas de texto (string): se utilizan para almacenar texto y caracteres.
  */

  $array = [];
  var_dump($array);
  /**
   * *Arreglos (array): se utilizan para almacenar una colección de datos, que pueden ser de diferentes tipos.

  */

  /**
   * TODO: 9.Números y operadores
   * 
   * todo : Operadores aritmeticos 
   * * + = Adicion
   * * - = Substraccion
   * * * = Multiplicacion
   * * / = Divison
   * * % = Modulo
   * * (**) = Exponenciacion
   * 
   * todo: Operadores de asignacion
   * * = igualar
   * 
   * todo: Operadores de Array
   * * + = Union
   * * == = Igualdad
   * * === = Identico
   * * != = desigualdad
   * * <> = desigualdad
   * * !== = no es identico
   * 
   * todo: Operadores Bitwise
   * * & = and
   * * ^ = xor
   * * | = not
   * * << = shift left
   * * >> = shift rigth
   * 
   * todo: Operadores de comparacion
   * * == = igual
   * * === = identico
   * * != = no es igual
   * * !== = no es identico
   * * <> = no igual
   * * < = menor a esto
   * * <= menor o igual
   * * > = mayor a esto
   * * >= mayor o igual
   * * <=> = spaceship (-1 si izquierda es menor, 0 si es igual, 1 si izquierda es mayor)
   * 
   * todo: Operadores de ejecucion
   * * `` = backticks
   * 
   * todo: Operadores para control de errores
   * * @ = at sign
   * 
   * todo: Operadores de incremento/decremento
   * * ++$a = preIncremento
   * * $a++ = PostIncremento
   * * --$a = PreDrecemento
   * * $a-- = PostDecremento
   * 
   * todo: Operadores de logica
   * * && = and
   * * || = or 
   * * ! = not
   * * and = and
   * * xor = xor
   * * or = or
   *
  */

  $numero1 = 20;
  $numero2 = 30;
  $numero3 = 30;
  $numero4 = "30";

  var_dump($numero1 > $numero2);
  echo "<br/>";

  var_dump($numero1 < $numero2);
  echo "<br/>";

  var_dump($numero1 >= $numero2);
  echo "<br/>";

  var_dump($numero1 <= $numero2);
  echo "<br/>";

  var_dump($numero2 == $numero3);
  echo "<br/>";

  var_dump($numero2 == $numero4);
  echo "<br/>";

  var_dump($numero2 === $numero4);
  echo "<br/>";

  var_dump($numero1 <=> $numero2);
  echo "<br/>";

  var_dump($numero2 <=> $numero3);
  echo "<br/>";

  var_dump($numero2 <=> $numero1);
  echo "<br/>";


  $nombreCliente = "Campers Campuslands";

  echo strlen($nombreCliente);
  var_dump($nombreCliente);

  /**
   ** Conocer extension de un string
   * @var $nombreCliente 
  */

  $text = trim($nombreCliente);
  echo strlen($texto);

  /**
   **Eliminar espacios en blanco 
  */

  echo strtoupper($nombreCliente);

  /**
   **Convertirlo a mayuscula 
  */

  echo strtolower($nombreCliente);
  /**
   **Convertirlo en minuscula 
  */

  $mail1 = "correo@correo.com";
  $mail2 = "correo@correo.com";

  var_dump(strtolower($mail1) === strtolower($mail2));
  echo str_replace('Juan','J',$nombreCliente);

  echo strpos($nombreCliente,'Pedro');
  /**
   **Revisar si un string existe o no
  */

  $tipoCliente = "Premium - Empresarial";

  echo "<br>";

  echo "El Cliente". $nombreCliente. "es". $tipoCliente;

  echo "El cliente {$nombreCliente} es {$tipoCliente}";

  /**
   *Todo: 10.Arreglos, Arreglos asociativos y funciones para arreglos
  */

  $miArreglo = array("valor1","valor2","valor3");

  $carrito = ['Tablet', 'Television', 'Computadora'];

  echo "<pre>";
  var_dump($carrito);
  echo "</pre>";

  /**
   ** Util para ver los contenidos de un Array 
  */

  echo $carrito[1];

  /**
   ** Acceder a un elemento de un Array 
  */

  $carrito[3] = 'Nuevo Producto...';

  /**
   **Añade un elemento en el indice 3 del arreglo 
  */

  array_push($carrito, 'Audifonos');

  /**
   **Añadir un elemento nuevo al final 
  */

  array_unshift($carrito, 'Smartwatch');

  /**
   **Añade un elemento al inicio
  */

  echo "<pre>";
  var_dump($carrito);
  echo "</pre>";

  /**
   **Util para ver los contenidos de un array
  */

  $clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
  echo "<pre>";
  var_dump($clientes);
  echo "</pre>";

  echo $clientes[1];

  /**
   *Todo: 11.Isset() y Empty()
   *En PHP, isset() y empty() son dos funciones utilizadas para verificar si una variable o un elemento de un array tiene un valor definido o no. A pesar de que ambas funciones tienen objetivos similares, hay algunas diferencias clave entre ellas.
  */

  $miVariable = "Hola";
  if(isset($miVariable)){
    echo "La variable esta definida y tiene un valor";
  }
  else{
    echo "La variable no esta definida o no tiene un valor";
  }

  $miVariable = "";
  if(empty($miVariable)){
    echo "La variable no esta definida";
  }
  else{
    echo "La variable esta definida";
  }

  $cliente = [];
  $clientes2 = array();
  $clientes3 = array('Pedro','Juan','Karen');
  $cliente=[
    'nombre'=>'Juan',
    'saldo'=> 200
  ];

  var_dump(empty($clientes));
  var_dump(empty($clientes3));
  var_dump(empty($clientes2));
  echo "<br>";

  var_dump(isset($clientes4));
  var_dump(isset($clientes));
  var_dump(isset($clientes2));
  var_dump(isset($clientes3));

  var_dump(isset($cliente['nombre']));
  var_dump(isset($cliente['codigo']));

  //in_array - buscar elementos en un arreglo

  var_dump(in_array('Audifonos',$carrito));


  //Ordenar elementos en un arreglo

  $numeros = array(1,3,4,5,1,2);

  sort($numeros);
  rsort($numeros);

  echo "<pre>";
  var_dump($numeros);
  echo "</pre>";

  //Ordenar arreglo asociativo

  $cliente = array(
    'saldo' =>200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
  );

  echo "<pre>";
  var_dump($cliente);
  echo "</pre>";

  asort($cliente); // Ordena por valores (Orden alfabetico)
  arsort($cliente); //Ordena por valores (Z primero)
  ksort($cliente); //Ordena por llaves (Orden alfabetico)
  krsort($cliente); //Orden alfabetico inverso

  /**
   *todo Estructuras de control 
   *Las estructuras de control en programación son herramientas que se utilizan para controlar el flujo de ejecución de un programa. Estas estructuras permiten que el programa tome decisiones y realice diferentes acciones en función de ciertas condiciones.
   *todo Estructuras condicionales
   *Las estructuras condicionales son una estructura de control de flujo en programación que permite que el programa tome decisiones basadas en si se cumple o no una condición. En otras palabras, una estructura condicional permite que el programa ejecute diferentes bloques de código en función de si se cumple o no una determinada condición.
   *todo IF
   *En programación, el condicional "if" es una estructura de control que permite tomar decisiones en función de si se cumple o no una determinada condición. Se utiliza para definir una acción que se ejecutará si se cumple la condición especificada y otra acción que se ejecutará si no se cumple.
  */

  if (10>3){
  }
  else if(10<20){
  }
  else{
  }

  /**
   *todo switch
   * En PHP, el "switch" es una estructura de control que permite ejecutar diferentes bloques de código dependiendo del valor de una variable.
  */

