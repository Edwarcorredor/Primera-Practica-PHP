<?php
  /**
   **Se tiene que dividir por carpetas los tipos de archivos para tener un orden en el proyecto
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
    define("MENSAJE","mundo");
    printf("%s %s ",$mensaje, MENSAJE);
    /**
     **define se usa para crear constantes 
    */
    var_dump($mensaje);
    /**
     * *var_dump se usa para imprimir el contenido y la estructura del dato
    */
    $nombre = (string) "Edwar";
    /**
     * *$variable = (tipo) se usa para definir variables y decir estrictamente su tipo de dato
    */ 

?>