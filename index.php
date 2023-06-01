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
     * TODO: Números y operadores
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
     * * <=> = spaceship 
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

?>