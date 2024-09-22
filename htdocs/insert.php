<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Datos - Estacionamiento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #e50914;
        }
        h1 {
            margin: 0;
        }
        nav {
            text-align: center;
            margin: 20px 0;
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
        form {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
        }
        fieldset {
            border: 2px solid #e50914;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }
        legend {
            padding: 0 10px;
            color: #333;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="number"],
        input[type="datetime-local"],
        select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #e50914;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #ff6b6b;
        }
    </style>
</head>
<body>
<header>
    <h1>Registro de Datos - Estacionamiento</h1>
</header>
<nav>
    <a href="inicio.php">Inicio</a>
    <a href="view.php">Ver Datos</a>
</nav>

<form action="" method="post">
    <h2>Registro de Cliente</h2>
    <fieldset>
        <legend>Registro de Cliente</legend>
        <label for="nombre_cliente">Nombre:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" required>
        <label for="apellido_paterno_cliente">Apellido Paterno:</label>
        <input type="text" id="apellido_paterno_cliente" name="apellido_paterno_cliente" required>
        <label for="telefono_cliente">Teléfono:</label>
        <input type="tel" id="telefono_cliente" name="telefono_cliente" required>
        <label for="correo_cliente">Correo Electrónico:</label>
        <input type="email" id="correo_cliente" name="correo_cliente" required>
    </fieldset>

    <h2>Registro de Vehículo</h2>
    <fieldset>
        <legend>Registro de Vehículo</legend>
        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa" required>
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required>
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>
        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="Automóvil">Automóvil</option>
            <option value="Motocicleta">Motocicleta</option>
            <option value="Camioneta">Camioneta</option>
        </select>
    </fieldset>

    <h2>Registro de Empleado</h2>
    <fieldset>
        <legend>Registro de Empleado</legend>
        <label for="id_empleado">ID Empleado:</label>
        <select id="id_empleado" name="id_empleado" required>
            <option value="1">1. Carlos García</option>
            <option value="2">2. Luis Martínez</option>
            <option value="3">3. Ana López</option>
            <option value="4">4. Pedro González</option>
            <option value="5">5. María Rodríguez</option>
            <option value="6">6. Juan Hernández</option>
            <option value="7">7. Laura Fernández</option>
            <option value="8">8. José Jiménez</option>
            <option value="9">9. Elena Pérez</option>
            <option value="10">10. Raúl Sánchez</option>
        </select>
    </fieldset>

    <h2>Registro de Espacio de Estacionamiento</h2>
    <fieldset>
        <legend>Registro de Espacio de Estacionamiento</legend>
        <label for="id_espacio">Número de Espacio:</label>
        <select id="id_espacio" name="id_espacio" required>
            <option value="1">A1 - Nivel 1 - Estándar</option>
            <option value="2">A2 - Nivel 1 - Estándar</option>
            <option value="3">A3 - Nivel 1 - Para Discapacitados</option>
            <option value="4">B1 - Nivel 2 - Estándar</option>
            <option value="5">B2 - Nivel 2 - Estándar</option>
            <option value="6">B3 - Nivel 2 - Reservado</option>
            <option value="7">C1 - Nivel 3 - Estándar</option>
            <option value="8">C2 - Nivel 3 - Para Discapacitados</option>
            <option value="9">C3 - Nivel 3 - Reservado</option>
            <option value="10">D1 - Nivel 4 - Estándar</option>
        </select>
    </fieldset>

    <h2>Registro de Tarifa</h2>
    <fieldset>
        <legend>Registro de Tarifa</legend>
        <label for="id_tarifa">Tipo de Tarifa:</label>
        <select id="id_tarifa" name="id_tarifa" required>
            <option value="1">Tarifa estándar por hora-automovil - 20.00$</option>
            <option value="2">Tarifa estándar por hora-motocicleta - 15.00$</option>
            <option value="3">Tarifa estándar por hora-camioneta - 25.00$</option>
            <option value="4">Tarifa estándar por día-automovil - 130.00$</option>
            <option value="5">Tarifa estándar por día-motocicleta - 110.00$</option>
            <option value="6">Tarifa estándar por día-camioneta - 150.00$</option>
            <option value="7">Tarifa especial de fin de semana - 300.00$</option>
            <option value="8">Tarifa para estacionamiento mensual - 900.00$</option>
            <option value="9">Tarifa especial por reservación - 10.00$</option>
            <option value="10">Tarifa para espacios reservados para discapacitados - 12.50$</option>
        </select>
    </fieldset>

    <h2>Registro de Ingreso y Salida</h2>
    <fieldset>
        <legend>Registro de Ingreso y Salida</legend>
        <label for="fecha_hora_ingreso">Fecha y Hora de Ingreso:</label>
        <input type="datetime-local" id="fecha_hora_ingreso" name="fecha_hora_ingreso" required>
        <label for="fecha_hora_salida">Fecha y Hora de Salida:</label>
        <input type="datetime-local" id="fecha_hora_salida" name="fecha_hora_salida">
        <label for="total_a_pagar">Total a pagar:</label>
        <input type="number" step="0.01" id="total_a_pagar" name="total_a_pagar" required>
    </fieldset>

    <input type="submit" name="insert_all" value="Registrar Todos los Datos">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert_all'])) {
    require 'db.php';

    // Set autocommit to false to manage transactions manually
    $conn->autocommit(FALSE);

    try {
        // Insert Cliente
        $nombre_cliente = $_POST['nombre_cliente'];
        $apellido_paterno_cliente = $_POST['apellido_paterno_cliente'];
        $telefono_cliente = $_POST['telefono_cliente'];
        $correo_cliente = $_POST['correo_cliente'];

        $sql_cliente = $conn->prepare("INSERT INTO Cliente (nombre, apaterno, telefono, correo_electronico) VALUES (?, ?, ?, ?)");
        $sql_cliente->bind_param("ssss", $nombre_cliente, $apellido_paterno_cliente, $telefono_cliente, $correo_cliente);
        $sql_cliente->execute();
        $id_cliente = $conn->insert_id; // Capturar el id_cliente insertado

        // Insert Vehículo
        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $tipo = $_POST['tipo'];

        $sql_vehiculo = $conn->prepare("INSERT INTO Vehiculo (id_cliente, placa, marca, modelo, color, tipo) VALUES (?, ?, ?, ?, ?, ?)");
        $sql_vehiculo->bind_param("isssss", $id_cliente, $placa, $marca, $modelo, $color, $tipo);
        $sql_vehiculo->execute();
        $id_vehiculo = $conn->insert_id; // Capturar el id_vehiculo insertado

        // Insert Empleado (registro del empleado que atendió)
        $id_empleado = $_POST['id_empleado'];

        // Insert Registro de Ingreso y Salida
        $numero_espacio = $_POST['id_espacio'];
        $tipo_tarifa = $_POST['id_tarifa'];
        $fecha_hora_ingreso = $_POST['fecha_hora_ingreso'];
        $fecha_hora_salida = $_POST['fecha_hora_salida'] ? $_POST['fecha_hora_salida'] : null;
        $total_a_pagar = $_POST['total_a_pagar'];

        $sql_registro = $conn->prepare("INSERT INTO Registro_Estacionamiento (id_vehiculo, id_espacio, id_empleado, fecha_hora_entrada, fecha_hora_salida, id_tarifa, total_a_pagar) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql_registro->bind_param("iiissid", $id_vehiculo, $numero_espacio, $id_empleado, $fecha_hora_ingreso, $fecha_hora_salida, $tipo_tarifa, $total_a_pagar);
        $sql_registro->execute();

        // Commit the transaction
        $conn->commit();
        echo "Todos los datos se han registrado correctamente";
    } catch (Exception $e) {
        // Rollback the transaction if an error occurs
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the prepared statements and connection
        if (isset($sql_cliente)) $sql_cliente->close();
        if (isset($sql_vehiculo)) $sql_vehiculo->close();
        if (isset($sql_registro)) $sql_registro->close();
        $conn->close();
    }
}
?>
</body>
</html>
