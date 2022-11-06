<?php

function obtenerServicios()
{
    try {
        //importanr conexión
        require "database.php";
        //var_dump($db);

        //escribir consulta sql
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($db, $sql); //dos parámetros, la db y la query a realizar

        //obtener resultados

        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta)); //mysqli_fetch_assoc convierte los resultados a un array de php
        // var_dump(mysqli_fetch_all($consulta)); all trae todos los resultados
        echo "</pre>";
        //
        //
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();
