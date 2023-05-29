<?php
  /**
   **echo imprime contenido
   **$variable se usa para definir variables
   **printf otra forma de imprimir contenido usando un tipo de template string de js
   **sprintf Se comporta parecido a un template string
   **var_dump se usa para imprimir el contenido y la estructura del dato
   **$variable = (tipo) se usa para definir variables y decir estrictamente su tipo de dato
   **Se tiene que dividir por carpetas los tipos de archivos para tener un orden en el proyecto
  */
  
    echo 5; 
    $texto = "Mundo ";
    printf("Hola %s ", $texto); 
    $mensaje = sprintf("Hola %s ", $texto);
    define("MENSAJE","mundo");
    printf("%s %s ",$mensaje, MENSAJE);
    var_dump($mensaje);
    $nombre = (string) "Edwar";

?>