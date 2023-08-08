<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Datos a agregar o actualizar en el archivo JSON
$nuevos_datos = [
    $_GET["actualDate"] => [
        "name" => $_GET["name"],
        "ip" => $_SERVER['REMOTE_ADDR'],
        "browser" => $_SERVER['HTTP_USER_AGENT'],
        "lenguage" => $_SERVER['HTTP_ACCEPT_LANGUAGE']
    ]
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

echo json_encode($response,JSON_FORCE_OBJECT);
?>