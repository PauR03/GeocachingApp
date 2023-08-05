<?php

// Datos a agregar o actualizar en el archivo JSON
$nuevos_datos = [
    $_GET["actualDate"] => $_GET["name"]
];

// Ruta del archivo JSON
$archivo_json = "names.json";

// Leer el contenido actual del archivo JSON (si existe)
if (file_exists($archivo_json)) {
    $contenido_actual = file_get_contents($archivo_json);
    $datos_existentes = json_decode($contenido_actual, true);
} else {
    $datos_existentes = [];
}

// Agregar o actualizar los datos nuevos en el arreglo existente
$datos_actualizados = array_merge($datos_existentes, $nuevos_datos);

// Convertir el arreglo a formato JSON
$json_actualizado = json_encode($datos_actualizados, JSON_PRETTY_PRINT);

// Escribir el contenido actualizado en el archivo JSON
file_put_contents($archivo_json, $json_actualizado);

$response = array(
    'success' => true,
    'message' => 'Solicitud procesada con éxito',
    'data' => [$_GET["actualDate"] => $_GET["name"]]
);

header('Content-Type: application/json', true, 200);
echo json_encode($response);


?>