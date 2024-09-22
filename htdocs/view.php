<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamiento Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            background-image: url('https://www.example.com/parking-background.jpg'); /* URL de la imagen de fondo */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        header {
            background-color: rgba(51, 51, 51, 0.9);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-bottom: 5px solid #e50914;
        }
        h1 {
            margin: 0;
            font-size: 36px;
        }
        nav {
            text-align: center;
            margin: 30px 0;
        }
        nav a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #333;
            border: 2px solid #e50914;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        nav a:hover {
            background-color: #e50914;
            color: #fff;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 40px;
            color: #e50914;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #e50914;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1>Administración de Estacionamiento</h1>
    </header>

    <nav>
        <a href="inicio.php">Inicio</a>
    </nav>

    <div class="container">
        <?php
        require 'db.php';

        $tablas = ["Cliente", "Vehiculo", "Empleado", "Espacio_Estacionamiento", "Tarifa", "Registro_Estacionamiento"];

        foreach ($tablas as $tabla) {
            echo "<h2>$tabla</h2>";
            $sql = "SELECT * FROM $tabla";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table><tr>";
                while ($fieldinfo = $result->fetch_field()) {
                    echo "<th>{$fieldinfo->name}</th>";
                }
                echo "</tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 resultados";
            }
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
