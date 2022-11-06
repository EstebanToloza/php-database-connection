<?php

function obtenerServicios(): array
{
    try {
        //importanr conexión
        require "database.php";
        //var_dump($db);

        //escribir consulta sql
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($db, $sql); //dos parámetros, la db y la query a realizar

        //Array vacío

        $servicios = [];
        $i = 0;

        //obtener resultados

        /* echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta)); //mysqli_fetch_assoc convierte los resultados a un array de php
        // var_dump(mysqli_fetch_all($consulta)); all trae todos los resultados
        echo "</pre>"; */

        while ($row = mysqli_fetch_assoc(($consulta))) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }

        /* echo "<pre>";
        var_dump(json_encode($servicios));
        echo "</pre>"; */

        return $servicios;

        //
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();
