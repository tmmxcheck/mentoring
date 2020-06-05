<?php

	echo "hola mundo 2.... asdfasjlkfjlaksdf phpp";
        echo "Comenzando bloque para conexión a mysql....<br>";
        $enlace =  mysql_connect('chuymysql', 'root', 'd4a1234');
        if (!$enlace) {
                die('No pudo conectarse: ' . mysql_error());
        }
        echo 'Conectado satisfactoriamente';
        mysql_close($enlace);

?>
