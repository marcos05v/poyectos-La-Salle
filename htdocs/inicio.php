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
            background-color: #f8f8f8;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin: 0;
            font-size: 36px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        nav {
            text-align: center;
            margin-top: 30px;
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
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        nav a:hover {
            background-color: #e50914;
            color: #fff;
            border-color: #e50914;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Administración de Estacionamiento</h1>
    </header>
    <nav>
        <a href="insert.php">Insertar Datos</a>
        <a href="view.php">Ver Datos</a>
    </nav>
    <div class="container">
        <!-- Contenido adicional puede ir aquí -->
    </div>
</body>
</html>
