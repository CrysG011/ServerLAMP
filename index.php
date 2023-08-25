<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = $_POST["host"];
    $dbname = $_POST["dbname"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }

    // Resto del código para manejar el formulario de registro de usuarios
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
</head>
<body>
    <h1>Configuración de Base de Datos</h1>
    <form method="POST" action="">
        <label>Host: <input type="text" name="host"></label><br>
        <label>Nombre de la Base de Datos: <input type="text" name="dbname"></label><br>
        <label>Nombre de Usuario: <input type="text" name="username"></label><br>
        <label>Contraseña: <input type="password" name="password"></label><br>
        <button type="submit">Conectar</button>
    </form>
</body>
</html>
