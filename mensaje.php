<?php
    echo "<h1>MENSAJE DE ARCHIVO EXTERNO </h1>\n";
    echo "<h4>Tabla de multiplicar</h4>";
    
    function tablaMultiplicar(){
    $var1 = 5;
    for($i=1;$i>12;$i++){
        $res = $i*$var1;
        echo ("$i x $var1 = $res<br>");
    }
   }
?>