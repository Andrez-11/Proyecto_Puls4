<?php 

	$mysqli = new mysqli("localhost", "root2", "123", "artet0_diplomado");

	if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}


/* Consultas de selección que devuelven un conjunto de resultados */
if ($resultado = $mysqli->query("SELECT * FROM usuarios")) {
    printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    /* liberar el conjunto de resultados */
    $resultado->close();
}

?>