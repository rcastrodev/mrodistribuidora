<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Email desde MRODistribuidora</title>
</head>
<body>
    <p>Este correo ha sido enviado desde el formulario de contacto en mrodistribuidora.com.</p>
    <p>Estos son los datos que usuario ha enviado:</p>
    <ul>
        <li>Nombre: {{ $data['name'] }}</li>
        <li>Email: {{ $data['email'] }}</li>
        <li>Asunto: {{ $data['subject'] }}</li>
        <li>Mensaje: {{ $data['message'] }}</li>
        <li>Archivo: {{ $data['file'] }}</li>
    </ul>
</body>
</html>